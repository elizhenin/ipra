<?php defined('SYSPATH') or die('No direct script access.');

class Model_Ipra extends Model

{
    static function slog($table, $sql)
    {
        $session = Session::instance();
        $user = $session->get('user', false);

        Model_Syslog::TableAccess($user['id'], $table, $sql);
    }

    static function ilog($table, $sql)
    {
        $session = Session::instance();
        $user = $session->get('user', false);

        Model_Syslog::TableInsert($user['id'], $table, $sql);
    }

    static function ulog($table, $recid, $sql)
    {
        $session = Session::instance();
        $user = $session->get('user', false);

        Model_Syslog::TableUpdate($user['id'], $table, $recid, $sql);
    }

    static function dlog($table, $recid, $sql)
    {
        $session = Session::instance();
        $user = $session->get('user', false);

        Model_Syslog::TableDelete($user['id'], $table, $recid, $sql);
    }

    static function InsertXML($xml)
    {
        $xml = str_replace('ct:', '', $xml);
        $xml = simplexml_load_string($xml, "SimpleXMLElement", LIBXML_NOCDATA);
        $xml = json_encode($xml);
        $xml = json_decode($xml, true);
//        print_r($xml);
//        goto checkpoint;
        $data = array(
            'okr_id' => '1', //Центральный Федеральный Округ
            'nreg' => '36',  // Воронеж
            'dt' => DB::expr('NOW()')
        );
        if (!empty($xml['Person']['SNILS'])) {
            $data['snils'] = $xml['Person']['SNILS'];
        }
        if (!empty($xml['Person']['FIO']['LastName'])) {
            $data['lname'] = $xml['Person']['FIO']['LastName'];
        }
        if (!empty($xml['Person']['FIO']['FirstName'])) {
            $data['fname'] = $xml['Person']['FIO']['FirstName'];
        }
        if (!empty($xml['Person']['FIO']['SecondName'])) {
            $data['sname'] = $xml['Person']['FIO']['SecondName'];
        }
        if (!empty($xml['Person']['BirthDate'])) {
            $data['bdate'] = $xml['Person']['BirthDate'];
        }
        if (isset($xml['Person']['IsMale'])) {
            switch ($xml['Person']['IsMale']) {
                case 'true': {
                    $data['gndr'] = 1;
                    break;
                }
                case 'false': {
                    $data['gndr'] = 2;
                    break;
                }
            }
        }
        if (!empty($xml['Recipient']['RecipientType']['Id'])) {
            $data['oivid'] = $xml['Recipient']['RecipientType']['Id'];
        }
        if (!empty($xml['ProtocolNum'])) {
            $data['docnum'] = $xml['ProtocolNum'];
        }
        if (!empty($xml['ProtocolDate'])) {
            $data['docdt'] = $xml['ProtocolDate'];
        }
        $data['prg'] = 1; // 1 - IPR, 2 - PRP
        if (!empty($xml['Number'])) {
            $data['prgnum'] = $xml['Number'];
        }
        if (!empty($xml['IssueDate'])) {
            $data['prgdt'] = $xml['IssueDate'];
        }
        if (!empty($xml['Id'])) {
            $data['mseid'] = $xml['Id'];
        }

        if (!empty($xml['MedSection']['SenderMedOrgName'])) {
            $data['med_org_txt'] = $xml['MedSection']['SenderMedOrgName'];
        }

//        $r = $data;
//        $search_str = trim($r['dt']).
//            trim($r['snils']).
//            trim($r['lname']).' '.
//            trim($r['fname']).' '.
//            trim($r['sname']).
//            trim($r['bdate']).
//            trim($r['docnum']).
//            trim($r['docdt']).
//            trim($r['prgnum']).
//            trim($r['prgdt']);
//        $data['search'] = $search_str;

        $db = DB::select('id')
            ->from('prg0')
            ->where('mseid', '=', $data['mseid'])
            ->limit(1)
            ->execute()
            ->as_array();
        if (!empty($db[0]['id'])) {
            $id = $db[0]['id'];
            unset($db);
            $db0 = DB::update('prg0')
                ->set($data)
                ->where('id', '=', $id);
            self::ulog('prg', $id, $db0->compile());
            $db0
                ->execute();

        } else {
            $db0 = DB::insert('prg0', array_keys($data))
                ->values($data);
            self::ilog('prg', $db0->compile());
            $db0
                ->execute();

            $db = DB::select('id')
                ->from('prg0')
                ->where('mseid', '=', $data['mseid'])
                ->limit(1)
                ->execute()
                ->as_array();
            $id = $db[0]['id'];
        }

        if (!empty($xml['MedSection'])) {
            if (!(key($xml['MedSection']['EventGroups']['Group']) == '0')) {
                $xml['MedSection']['EventGroups']['Group'] = array($xml['MedSection']['EventGroups']['Group']);
            }

            foreach ($xml['MedSection']['EventGroups']['Group'] as $Group) {
                $data = array();
                $data['prgid'] = $id;
                if (!empty($Group['GroupType']['Id'])) {
                    switch ($Group['GroupType']['Id']) {
                        case 34: {
                            $data['typeid'] = 2;//Медицинская реабилитация
                            break;
                        }
                        case '35': {
                            $data['typeid'] = 3;//Реконструктивная хирургия
                            break;
                        }
                        case '36': {
                            $data['typeid'] = 4;//Протезирование и ортезирование
                            break;
                        }
                        default: {
                        goto ignore_type;
                        }
                    }
                } else $data['typeid'] = 0;

                if (!empty($Group['PeriodTo'])) {
                    $data['dt_exc'] = $Group['PeriodTo'];
                }
                if (!empty($Group['Executor'])) {
                    $data['execut'] = $Group['Executor'];
                }

                $db0 = DB::insert('prg0_rhb', array_keys($data))
                    ->values($data);
                self::ilog('prg', $db0->compile());
                $db0
                    ->execute();
                ignore_type:
            }

        }
        checkpoint:
    }

    static function AddPerson($data)
    {
//        $data['dt'] = DB::expr('NOW()');
        $data['okr_id'] = 1;
        $data['nreg'] = 36;
        $data['oivid'] = 1;

        if (empty($data['id'])) {
            unset($data['id']);
            $session = Session::instance();
            $user = $session->get('user', false);
            $data['med_org_id'] = $user['med_org_id'];
            $db = DB::insert('prg0', array_keys($data))
                ->values($data);
            self::ilog('prg', $db->compile());
            $db
                ->execute();

        } else {
            $db = DB::update('prg0')
                ->set($data)
                ->where('id', '=', $data['id']);
            self::ulog('prg', $data['id'], $db->compile());
            $db
                ->execute();
        }
    }

    static function DeletePersons($records)
    {
        if (!empty($records))
            foreach ($records as $id) {
                $db = DB::delete('prg0')
                    ->where('id', '=', $id)
                    ->where('mseid', '=', '0');

                self::dlog('prg', $id, $db->compile());
                $db
                    ->execute();
            }
    }

    static function GetPersons($limit = 0, $offset = 0, $sort = null, $search = null, $outgoing = false)
    {
        $db = DB::select(
            array('prg.id', 'id'),
            array('prg_okr.name', 'okrug'),
            array('prg_reg.name', 'region'),
            array('prg.nreg', 'nreg'),
            array('prg.dt', 'dt'),
            array('prg.snils', 'snils'),
            array('prg.mseid', 'mseid'),
            array('prg.lname', 'lname'),
            array('prg.fname', 'fname'),
            array('prg.sname', 'sname'),
            array('prg.bdate', 'bdate'),
            array('prg.gndr', 'gndr'),
            array('prg_oiv.name', 'org_isp_vlast'),
            array('prg.docnum', 'docnum'),
            array('prg.docdt', 'docdt'),
            array('prg.prg', 'prg'),
            array('prg.prgnum', 'prgnum'),
            array('prg.prgdt', 'prgdt'),
            array('prg.med_org_id', 'medorg'),
            array('prg.medorgexecutorid', 'medorgexecutorid')
        )
            ->from(array('prg0', 'prg'))
            ->join('prg_okr')
            ->on('prg_okr.id', '=', 'prg.okr_id')
            ->join('prg_reg')
            ->on('prg_reg.id', '=', 'prg.nreg')
            ->join('prg_oiv')
            ->on('prg_oiv.id', '=', 'prg.oivid');
        if (!empty($sort)) {
            foreach ($sort as $one)
                $db->order_by($one['field'], $one['direction']);
        } else {
            $db->order_by('prg.prgdt', 'DESC');
        }
        if (!empty($search)) {
            $db->and_where_open();
            foreach ($search as $one)
                $db->or_where('prg.search', 'ilike', '%' . trim($one['value']) . '%');
            $db->and_where_close();
        }
        {
            $session = Session::instance();
            $user = $session->get('user', false);
            if (('lpu' == $user['rights']) &&
                (0 < $user['med_org_id'])
            )
                $db->where('prg.med_org_id', '=', $user['med_org_id']);
        }

        if ($outgoing) {
            $db->where('prg.mseid', '=', '0');
        } else {
            $db->where('prg.mseid', '!=', '0');
        }
        if (!empty($limit)) {
            $db->limit($limit)
                ->offset($offset);
        }

        self::slog('prg,prg_okr,prg_reg,prg_oiv', $db->compile());
        $db = $db
            ->execute()
            ->as_array();
//        if (!empty($db))
        return $db;
//        else return false;
    }

    static function GetOnePerson($id, $outgoing = false)
    {
        $db = DB::select(
            array('prg.id', 'id'),
            array('prg_okr.name', 'okrug'),
            array('prg_reg.name', 'region'),
            array('prg.nreg', 'nreg'),
            array('prg.dt', 'dt'),
            array('prg.snils', 'snils'),
            array('prg.lname', 'lname'),
            array('prg.fname', 'fname'),
            array('prg.sname', 'sname'),
            array('prg.bdate', 'bdate'),
            array('prg.gndr', 'gndr'),
            array('prg_oiv.name', 'org_isp_vlast'),
            array('prg.docnum', 'docnum'),
            array('prg.docdt', 'docdt'),
            array('prg.prg', 'prg'),
            array('prg.prgnum', 'prgnum'),
            array('prg.prgdt', 'prgdt'),
            array('prg.med_org_id', 'med_org_id'),
            array('prg.medorgexecutorid', 'medorgexecutorid')
        )
            ->from(array('prg0', 'prg'))
            ->join('prg_okr')
            ->on('prg_okr.id', '=', 'prg.okr_id')
            ->join('prg_reg')
            ->on('prg_reg.id', '=', 'prg.nreg')
            ->join('prg_oiv')
            ->on('prg_oiv.id', '=', 'prg.oivid')
            ->where('prg.id', '=', $id);
        if ($outgoing) {
            $db->where('prg.mseid', '=', '0');
        } else {
            $db->where('prg.mseid', '!=', '0');
        }
        $db->limit(1);
        self::slog('prg,prg_okr,prg_reg,prg_oiv', $db->compile());
        $db = $db
            ->execute()
            ->as_array();
        if (!empty($db[0])) return $db[0];
        else return false;
    }

    static function GetOnePersonIdByFIObdate($lname, $fname, $sname, $bdate)
    {
        $db = DB::select(
            array('prg.id', 'id')
        )
            ->from(array('prg0', 'prg'))
            ->where('prg.lname', 'ilike', $lname)
            ->where('prg.fname', 'ilike', $fname)
            ->where('prg.sname', 'ilike', $sname)
            ->where('prg.bdate', '=', $bdate)
            ->where('prg.mseid', '!=', '0')
            ->limit(1);
        self::slog('prg', $db->compile());
        $db = $db
            ->execute()
            ->as_array();
        if (!empty($db[0])) return $db[0];
        else return false;
    }

    static function GetOnePersonIdBySnils($snils)
    {
        $db = DB::select(
            array('prg.id', 'id')
        )
            ->from(array('prg0', 'prg'))
            ->where('prg.snils', '=', $snils)
            ->where('prg.mseid', '!=', '0')
            ->limit(1);
        self::slog('prg', $db->compile());
        $db = $db
            ->execute()
            ->as_array();
        if (!empty($db[0])) return $db[0];
        else return false;
    }

    static function CountPersons($search, $outgoing = false)
    {
        $db = DB::select(array(DB::expr('COUNT("id")'), 'count'))
            ->from(array('prg0', 'prg'));

        if (!empty($search)) {
            $db->and_where_open();
            foreach ($search as $one)
                $db->or_where('prg.search', 'ilike', '%' . trim($one['value']) . '%');
            $db->and_where_close();
        }
        {
            $session = Session::instance();
            $user = $session->get('user', false);
            if (('lpu' == $user['rights']) &&
                (0 < $user['med_org_id'])
            )
                $db->where('prg.med_org_id', '=', $user['med_org_id']);
        }
        if ($outgoing) {
            $db->where('prg.mseid', '=', '0');
        } else {
            $db->where('prg.mseid', '!=', '0');
        }
        $db = $db
            ->execute()
            ->as_array();
        if (!empty($db)) return $db[0]['count'];
        else return false;
    }

    static function GetPersonsIpra($prgid)
    {
        $db = DB::select(
            array('prg_rhb.id', 'recid'),
            array('rhb_type.name', 'type'),
            array('rhb_evnt.name', 'event'),
            array('prg_rhb.dt_exc', 'date'),
            array('rhb_res.shname', 'result'),
            array('prg_rhb.result', 'restxt')
        )
            ->from(array('prg0_rhb', 'prg_rhb'))
            ->join('rhb_type', 'left')
            ->on('rhb_type.id', '=', 'prg_rhb.typeid')
            ->join('rhb_evnt', 'left')
            ->on('rhb_evnt.id', '=', 'prg_rhb.evntid')
            ->join('rhb_res', 'left')
            ->on('rhb_res.id', '=', 'prg_rhb.resid')
            ->where('prg_rhb.prgid', '=', $prgid);
        self::slog('prg_rhb,rhb_type,rhb_evnt,rhb_res', $db->compile());
        $db = $db
            ->execute()
            ->as_array();
        if (!empty($db)) {
            foreach ($db as $key => $value) {
                $db[$key]['restxt'] = str_replace('"', '\"', trim($value['restxt']));
                if (!empty(trim($value['restxt'])) && (empty($value['result']))) $db[$key]['result'] = 'не выполнено(иное)';
            }
            return $db;
        } else return false;
    }

    static function CountPersonsIpra($prgid)
    {
        $db = DB::select(array(DB::expr('COUNT("id")'), 'count'))
            ->from(array('prg0_rhb', 'prg_rhb'))
            ->where('prg_rhb.prgid', '=', $prgid)
            ->execute()
            ->as_array();
        if (!empty($db)) return $db[0]['count'];
        else return false;
    }

    static function GetPersonsIpraFull($id)
    {
        $db = DB::select()
            ->from(array('prg0_rhb', 'prg_rhb'))
            ->where('prg_rhb.id', '=', $id);
        self::slog('prg_rhb', $db->compile());
        $db = $db
            ->execute()
            ->as_array();
        if (!empty($db)) return $db[0];
        else return false;
    }

    static function UpdPersonsIpraFull($record)
    {
        $id = $record['recid'];
        unset($record['recid']);

        $db = self::GetPersonsIpraFull($id);
        if (!$db['approved']) {
            $session = Session::instance();
            $user = $session->get('user', false);
            $prg = self::GetOnePerson($db['prgid']);
            if ($prg['med_org_id'] == 0) {
                self::AssocPerson($db['prgid'], $user['med_org_id']);
            }
            $db['result'] = trim($db['result']);
            if (empty($db['result']) && empty($db['resid'])) {
                foreach ($record as $key => $value) {
                    if (in_array($key, array(
                        'prgid',
                        'tsrid',
                        'excid',
                        'typeid',
                        'evntid',
                        'dicid',
                        'resid',
                        'par1', 'par2', 'par3'
                    ))) $record[$key] = (int)$value;
                }
                $db0 = DB::insert('prg0_rhb', array_keys($record))
                    ->values($record);
                self::ilog('prg_rhb', $db0->compile());
                $db0
                    ->execute();
            } else {

                foreach ($record as $key => $value) {
                    if (in_array($key, array(
                        'prgid',
                        'tsrid',
                        'excid',
                        'execut'
                    ))) unset($record[$key]);
                    if (in_array($key, array(
                        'typeid',
                        'evntid',
                        'dicid',
                        'resid',
                        'par1', 'par2', 'par3'
                    ))) $record[$key] = (int)$value;
                }
                $db = DB::update('prg0_rhb')
                    ->set($record)
                    ->where('id', '=', (int)$id);
                self::ulog('prg_rhb', $id, $db->compile());
                $db->execute();
            }
        }
    }

    static function GetPersonsUnassoc($sort, $limit, $offset)
    {
        $db = DB::select(
            'id', 'prgnum', 'prgdt', 'med_org_txt', 'med_org_id',
            'fname', 'lname', 'sname', 'bdate', 'snils'
        )
            ->from(array('prg0', 'prg'))
            ->where('med_org_id', '=', '0')
            ->where('prg.foreign', '=', false)
            ->where('prg.mseid', '!=', '0');
        if (!empty($sort)) {
            foreach ($sort as $one)
                $db->order_by($one['field'], $one['direction']);
        } else {
            $db->order_by('prgdt', 'DESC');
        }

        if (!empty($limit))
            $db
                ->limit($limit)
                ->offset($offset);
        self::slog('prg', $db->compile());

        $db = $db
            ->execute()
            ->as_array();
        if (!empty($db)) return $db;
        else return false;
    }

    static function CountPersonsUnassoc()
    {
        $db = DB::select(array(DB::expr('COUNT("id")'), 'count'))
            ->from(array('prg0', 'prg'))
            ->where('med_org_id', '=', '0')
            ->where('prg.foreign', '=', false)
            ->execute()
            ->as_array();
        if (!empty($db)) return $db[0]['count'];
        else return false;
    }

    static function AssocPerson($id, $med_org_id)
    {
        $data = array(
            'med_org_id' => $med_org_id
        );

        $db = DB::update('prg0')
            ->set($data)
            ->where('id', '=', $id);
        self::ulog('prg', $id, $db->compile());
        $db
            ->execute();
    }

    static function ForeignPerson($id)
    {
        $db = DB::update('prg0')
            ->set(array('foreign' => true))
            ->where('id', '=', $id);
        self::ulog('prg', $id, $db->compile());
        $db
            ->execute();
    }

    static function GetIpraReady($limit, $offset, $search)
    {
        $db = DB::select(
            array('prg_rhb.id', 'recid'),
            array('prg_rhb.dt_exc', 'date'),
            array('prg_rhb.name', 'ex_name'),
            array('prg_rhb.resid', 'resid'),
            array('prg.prgnum', 'prgnum'),
            array('prg.snils', 'snils'),
            array('prg.lname', 'lname'),
            array('prg.fname', 'fname'),
            array('prg.sname', 'sname'),
            array('prg.bdate', 'bdate'),
            array('prg.prgdt', 'prgdt'),
            array('med_org.name', 'med_org'),
            array('med_org.dicid', 'med_org_id'),
            array('rhb_type.name', 'type'),
            array('rhb_evnt.name', 'event'),
            array('rhb_dic.name', 'dicid'),
            array('rhb_tsr.name', 'tsrid')

        )
            ->from(array('prg0_rhb', 'prg_rhb'))
            ->join('rhb_type', 'left')
            ->on('rhb_type.id', '=', 'prg_rhb.typeid')
            ->join('rhb_evnt', 'left')
            ->on('rhb_evnt.id', '=', 'prg_rhb.evntid')
//            ->join('rhb_res','left')
//            ->on('rhb_res.id','=','prg_rhb.resid')
            ->join('rhb_dic', 'left')
            ->on('rhb_dic.id', '=', 'prg_rhb.dicid')
            ->join('rhb_tsr', 'left')
            ->on('rhb_tsr.id', '=', 'prg_rhb.tsrid')
            ->join(array('prg0', 'prg'), 'right')
            ->on('prg_rhb.prgid', '=', 'prg.id')
            ->join('med_org', 'left')
            ->on('med_org.dicid', '=', 'prg.med_org_id')
            ->where('med_org.parentid', '=', 0)
            ->where('prg_rhb.approved', '=', false)
            ->and_where_open()
            ->or_where('prg_rhb.resid', '!=', '0')
            ->or_where('prg_rhb.result', '!=', '')
            ->and_where_close();

        if (!empty($search)) {
            foreach ($search as $one) {
                if ($one['field'] == 'med_org_id') {
                    if (!empty($one['value'])) $db->and_where('prg.med_org_id', '=', $one['value']);
                }
            }
        }
        {
            $session = Session::instance();
            $user = $session->get('user', false);
            if (('lpu' == $user['rights']) &&
                (0 < $user['med_org_id'])
            )
                $db->and_where('prg.med_org_id', '=', $user['med_org_id']);
        }
        $db = $db
            ->limit($limit)
            ->offset($offset);
        self::slog('prg_rhb,rhb_type,thb_evnt,rhb_dic,rhb_tsr,prg,med_org', $db->compile());
        $db = $db
            ->execute()
            ->as_array();
        if (!empty($db)) {
            $return = array();
            foreach ($db as $one) {
                if (empty($return[$one['recid']])) $return[$one['recid']] = $one;
            }
            return $return;
        } else return false;
    }

    static function CountIpraReady($search)
    {
        $db = DB::select(array(DB::expr('COUNT("prg_rhb"."id")'), 'count'))
            ->from(array('prg0_rhb', 'prg_rhb'))
            ->join(array('prg0', 'prg'), 'right')
            ->on('prg_rhb.prgid', '=', 'prg.id')
            ->where('prg_rhb.approved', '=', false)
            ->and_where_open()
            ->or_where('prg_rhb.resid', '!=', '0')
            ->or_where('prg_rhb.result', '!=', '')
            ->and_where_close();
        if (!empty($search)) {

            foreach ($search as $one) {
                if ($one['field'] == 'med_org_id') {
                    if (!empty($one['value'])) $db->and_where('prg.med_org_id', '=', $one['value']);
                }

            }

        }
        {
            $session = Session::instance();
            $user = $session->get('user', false);
            if (('lpu' == $user['rights']) &&
                (0 < $user['med_org_id'])
            )
                $db->and_where('prg.med_org_id', '=', $user['med_org_id']);
        }
        $db = $db
            ->execute()
            ->as_array();
        if (!empty($db)) return $db[0]['count'];
        else return false;
    }

    static function GetIpraMedOrgCounted($from = false, $to = false)
    {
        $db = DB::select(
            array('med_org.dicid', 'recid'),
            array(DB::expr('COUNT("prg_rhb"."id")'), 'ipracount'),
            array('med_org.name', 'name')
        )
            ->from('med_org')
            ->join(array('prg0', 'prg'), 'right')
            ->on('med_org.dicid', '=', 'prg.med_org_id')
            ->join(array('prg0_rhb', 'prg_rhb'), 'right')
            ->on('prg_rhb.prgid', '=', 'prg.id')
            ->and_where_open()
            ->where('med_org.parentid', '=', '0')
            ->or_where('prg.med_org_id', '=', '0')
            ->and_where_close();
        if (!empty($from)) {
            $db->where('prg.prgdt', '>=', $from);
        }
        if (!empty($to)) {
            $db->where('prg.prgdt', '<=', $to);
        }
        $db->group_by('med_org.dicid')
            ->group_by('med_org.name')
            ->order_by('ipracount', 'DESC');
        self::slog('med_org,prg_rhb', $db->compile());
        $db = $db
            ->execute()
            ->as_array();

        if (!empty($db)) {
            foreach ($db as $key => $value) {
                if (trim($db[$key]['name']))
                    $db[$key]['name'] = trim($db[$key]['name']);
                else $db[$key]['name'] = '(не сопоставлено)';
            }

            return $db;
        } else return false;
    }

    static function GetReadyIpraMedOrgCounted($from = false, $to = false)
    {
        $db = DB::select(
            array('med_org.dicid', 'recid'),
            array(DB::expr('COUNT("prg_rhb"."id")'), 'ipracomplete'),
            array('med_org.name', 'name')
        )
            ->from('med_org')
            ->join(array('prg0', 'prg'), 'right')
            ->on('med_org.dicid', '=', 'prg.med_org_id')
            ->join(array('prg0_rhb', 'prg_rhb'), 'right')
            ->on('prg_rhb.prgid', '=', 'prg.id')
            ->and_where_open()
            ->where('med_org.parentid', '=', '0')
            ->or_where('prg.med_org_id', '=', '0')
            ->and_where_close()
            ->and_where_open()
            ->or_where('prg_rhb.resid', '!=', '0')
            ->or_where('prg_rhb.result', '!=', '')
            ->and_where_close();
        if (!empty($from)) {
            $db->where('prg.prgdt', '>=', $from);
        }
        if (!empty($to)) {
            $db->where('prg.prgdt', '<=', $to);
        }
        $db->group_by('med_org.dicid')
            ->group_by('med_org.name');
        self::slog('med_org,prg_rhb', $db->compile());
        $db = $db
            ->execute()
            ->as_array();

        if (!empty($db)) {
            foreach ($db as $key => $value) {
                if (trim($db[$key]['name']))
                    $db[$key]['name'] = trim($db[$key]['name']);
                else $db[$key]['name'] = '(не сопоставлено)';
            }

            return $db;
        } else return false;
    }

    static function GetPersonsMedOrgCounted($from = false, $to = false)
    {
        $db = DB::select(
            array('med_org.dicid', 'recid'),
            array(DB::expr('COUNT("prg"."id")'), 'persons'),
            array('med_org.name', 'name')
        )
            ->from('med_org')
            ->join(array('prg0', 'prg'), 'right')
            ->on('med_org.dicid', '=', 'prg.med_org_id')
            ->and_where_open()
            ->where('med_org.parentid', '=', '0')
            ->or_where('prg.med_org_id', '=', '0')
            ->and_where_close();
        if (!empty($from)) {
            $db->where('prg.prgdt', '>=', $from);
        }
        if (!empty($to)) {
            $db->where('prg.prgdt', '<=', $to);
        }
        $db->group_by('med_org.dicid')
            ->group_by('med_org.name')
            ->order_by('persons', 'DESC');
        self::slog('med_org,prg_rhb', $db->compile());
        $db = $db
            ->execute()
            ->as_array();

        if (!empty($db)) {
            foreach ($db as $key => $value) {
                if (trim($db[$key]['name']))
                    $db[$key]['name'] = trim($db[$key]['name']);
                else $db[$key]['name'] = '(не сопоставлено)';
            }

            return $db;
        } else return false;
    }

    static function GetPersonsFullAndPartiallyMedOrgCounted($from = false, $to = false)
    {
        $medorg = Model_Catalog::GetMedOrg(true);
        $new = array();
        $new[0] = array('medorg' => '(не сопоставлено)', 'count_full' => 0, 'count_partially' => 0);
        foreach ($medorg as $one) {
            $new[$one['dicid']] = array('medorg' => $one['name'], 'count_full' => 0, 'count_partially' => 0);
        }
        unset($medorg);
        $persons = DB::select(
            array(DB::expr('COUNT("prg_rhb"."typeid")'), 'ct_id'),
            array('prg.id', 'id'),
            array('prg.med_org_id', 'medorg_id'),
            array('prg_rhb.typeid', 'typeid')

        )
            ->from(array('prg0_rhb', 'prg_rhb'))
            ->join(array('prg0', 'prg'), 'right')
            ->on('prg_rhb.prgid', '=', 'prg.id');
        if (!empty($from)) {
            $persons->where('prg.prgdt', '>=', $from);
        }
        if (!empty($to)) {
            $persons->where('prg.prgdt', '<=', $to);
        }
        $persons = $persons->group_by('prg.id', 'prg_rhb.typeid')
            ->order_by('prg.id')
            ->execute()
            ->as_array();
        //  return $persons;
        foreach ($persons as $pkey => $person) {
            if (empty($dec[$person['id']])) {

                if ($person['ct_id'] > 1) {
                    $new[$person['medorg_id']]['count_full']++;
                    $inc[$person['id']] = true;
                }
                if (($person['ct_id'] == 1) && (!empty($inc[$person['id']]))) {
                    $new[$person['medorg_id']]['count_full']--;
                    $new[$person['medorg_id']]['count_partially']++;
                    $dec[$person['id']] = true;
                }
            }
        }
        return $new;
    }

    static function GetReadyIpraMedOrgCountedUnApproved()
    {
        $db = DB::select(
            array('med_org.dicid', 'recid'),
            array(DB::expr('COUNT("prg_rhb"."id")'), 'prgcomplete'),
            array('med_org.name', 'name')
        )
            ->from('med_org')
            ->join(array('prg0', 'prg'), 'right')
            ->on('med_org.dicid', '=', 'prg.med_org_id')
            ->join(array('prg0_rhb', 'prg_rhb'), 'right')
            ->on('prg_rhb.prgid', '=', 'prg.id')
            ->where('prg_rhb.approved', '=', false)
            ->and_where_open()
            ->where('med_org.parentid', '=', '0')
            ->or_where('prg.med_org_id', '=', '0')
            ->and_where_close()
            ->and_where_open()
            ->or_where('prg_rhb.resid', '!=', '0')
            ->or_where('prg_rhb.result', '!=', '')
            ->and_where_close()
            ->group_by('med_org.dicid')
            ->group_by('med_org.name')
            ->order_by('prgcomplete', 'DESC');
        self::slog('med_org,prg_rhb', $db->compile());
        $db = $db
            ->execute()
            ->as_array();

        if (!empty($db)) {
            foreach ($db as $key => $value) {
                if (trim($db[$key]['name']))
                    $db[$key]['name'] = trim($db[$key]['name']);
                else $db[$key]['name'] = '(не сопоставлено)';
            }

            return $db;
        } else return false;
    }

    static function GetPersonsIpraTypeId($prgid)
    {
        $db = DB::select(
            array('prg_rhb.typeid', 'typeid')
        )
            ->from(array('prg0_rhb', 'prg_rhb'))
            ->where('prg_rhb.id', '=', $prgid)
            ->limit(1);
        self::slog('prg_rhb', $db->compile());
        $db = $db
            ->execute()
            ->as_array();
        if (!empty($db[0]['typeid'])) return $db[0]['typeid'];
        else return false;
    }

    static function DeleteIpra($records)
    {
        if (!empty($records))
            foreach ($records as $id) {
                $db = DB::delete('prg0_rhb')
                    ->where('id', '=', $id);
                self::dlog('prg0_rhb', $id, $db->compile());
                $db
                    ->execute();
            }

    }

    static function SubmitIpra($records)
    {
        $prg_rhb = DB::select()
            ->from(array('prg0_rhb', 'prg_rhb'))
            ->where('id', 'in', $records)
            ->execute()
            ->as_array();
        $ids = array();
        if (!empty($prg_rhb)) {
            foreach ($prg_rhb as $one) {
                if (!empty($one['prgid']))
                    $ids[] = $one['prgid'];
            }
            $prg = DB::select()
                ->from('prg0')
                ->where('id', 'in', $ids)
                ->execute()
                ->as_array();
            if (!empty($prg)) {
                foreach ($prg as $data) {
                    $prgid = $data['id'];
                    //clenup unused
                    unset($data['med_org_txt']);
                    unset($data['med_org_id']);
                    unset($data['foreign']);
                    unset($data['search']);
                    unset($data['id']);
                    //insert person
                    $db = DB::select('id')
                        ->from('prg')
                        ->where('mseid', '=', $data['mseid'])
                        ->limit(1)
                        ->execute('remote')
                        ->as_array();
                    if (!empty($db[0]['id'])) {
                        $id = $db[0]['id'];
                        unset($db);
                        DB::update('prg')
                            ->set($data)
                            ->where('id', '=', $id)
                            ->execute('remote');

                    } else {
                        DB::insert('prg', array_keys($data))
                            ->values($data)
                            ->execute('remote');
                    }
                    $db = DB::select('id')
                        ->from('prg')
                        ->where('mseid', '=', $data['mseid'])
                        ->limit(1)
                        ->execute('remote')
                        ->as_array();
                    $id = $db[0]['id'];
                    //insert ipra
                    foreach ($prg_rhb as $check) {
                        if ($check['prgid'] == $prgid) {
                            $check['prgid'] = $id;
                            $prgrhb_id = $check['id'];
                            unset($check['id']);
                            unset($check['approved']);
                            DB::insert('prg_rhb', array_keys($check))
                                ->values($check)
                                ->execute('remote');
                            DB::update('prg0_rhb')
                                ->set(array('approved' => true))
                                ->where('id', '=', $prgrhb_id)
                                ->execute();
                        }
                    }
                }
            }
        }
    }
}

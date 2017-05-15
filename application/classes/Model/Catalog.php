<?php defined('SYSPATH') or die('No direct script access.');

class Model_Catalog extends Model

{

    static function slog($table,$sql)
    {
        $session = Session::instance();
        $user = $session->get('user', false);

        Model_Syslog::TableAccess($user['id'],$table,$sql);
    }

    static function ilog($table,$sql)
    {
        $session = Session::instance();
        $user = $session->get('user', false);

        Model_Syslog::TableInsert($user['id'],$table,$sql);
    }

    static function ulog($table,$recid,$sql)
    {
        $session = Session::instance();
        $user = $session->get('user', false);

        Model_Syslog::TableUpdate($user['id'],$table,$recid,$sql);
    }

    static function GetType()
    {
        $db = DB::select('id', 'name')
            ->from('rhb_type')
            ->where('grpid', '=', '1');

        self::slog('rhb_type',$db->compile());
        $db = $db
            ->execute()
            ->as_array();
        $return = array();
        if (!empty($db)) {
            foreach ($db as $value) {
                $return[$value['id']] = $value['name'];
            }
        }
        return $return;
    }

    static function GetEvent()
    {
        $db = DB::select('id', 'name')
            ->from('rhb_evnt')
            ->where('typeid', 'IN', array(2, 3, 4));
        self::slog('rhb_evnt',$db->compile());
        $db = $db
            ->execute()
            ->as_array();
        $return = array();
        if (!empty($db)) {
            foreach ($db as $value) {
                $return[$value['id']] = $value['name'];
            }
        }
        return $return;
    }

    static function GetDic()
    {
        $db = DB::select('id', 'name')
            ->from('rhb_dic');
        self::slog('rhb_dic',$db->compile());
        $db = $db
            ->execute()
            ->as_array();
        $return = array();
        if (!empty($db)) {
            foreach ($db as $value) {
                $return[$value['id']] = $value['name'];
            }
        }
        return $return;
    }

    static function GetTsr()
    {
        $db = DB::select('id', 'name', 'scode')
            ->from('rhb_tsr');
        self::slog('rhb_tsr',$db->compile());
        $db = $db
            ->execute()
            ->as_array();
        $return = array();
        if (!empty($db)) {
            foreach ($db as $value) {
                $return[$value['id']] = '[ ' . $value['scode'] . '] ' . $value['name'];
            }
        }
        return $return;
    }

    static function GetExecutors()
    {
        $db = DB::select('id', 'name')
            ->from('rhb_exc');
        self::slog('rhb_exc',$db->compile());
        $db = $db
            ->execute()
            ->as_array();
        $return = array();
        if (!empty($db)) {
            foreach ($db as $value) {
                $return[$value['id']] = $value['name'];
            }
        }
        return $return;
    }

    static function GetResults()
    {
        $db = DB::select('id', 'name')
            ->from('rhb_res');
        self::slog('rhb_res',$db->compile());
        $db = $db
            ->execute()
            ->as_array();
        $return = array();
        if (!empty($db)) {
            foreach ($db as $value) {
                $return[$value['id']] = $value['name'];
            }
        }
        return $return;
    }

    static function GetMedOrg($head = false)
    {
        $db = DB::select('id','dicid', 'name')
            ->from('med_org')
            ->where('deleted','=',false)
            ->order_by('id','ASC');
        if($head) $db = $db->where('parentid','=',0);
        self::slog('med_org',$db->compile());
        $db = $db
            ->execute()
            ->as_array();
        $return = array();
        if (!empty($db)){
            foreach($db as $db_key=>$db_item){
                foreach($db_item as $item_key=>$item_value){
                    $db[$db_key][$item_key] = trim($item_value);
                }
            }
        }
        if (!empty($db)) {
            foreach ($db as $value) {
                $return[$value['id']] = $value;
            }
        }
        return $return;
    }

    static function GetMedOrgUsers()
    {
        $db = DB::select(
            array('med_org.id','id'),
            array('med_org.dicid','dicid'),
            array('med_org.smo','smo'),
            array('med_org.name','name'),
			array('med_org.parentid','parentid'),
            array('users.login','login'),
            array('users.password','password')
            )
            ->from('med_org')
            ->join('users','left')
            ->on('users.med_org_id','=','med_org.dicid')
            ->where('deleted','=',false)
            ->order_by('dicid','ASC');
        self::slog('med_org,users',$db->compile());
        $db = $db
            ->execute()
            ->as_array();
        $return = array();
        if (!empty($db)) {
            foreach ($db as $value) {
                $return[$value['id']] = $value;
            }
        }
        return $return;
    }

    static function GetOneMedOrg($id)
    {
        $db = DB::select('id','dicid', 'name')
            ->from('med_org')
        ->where('dicid','=',$id)
            ->where('deleted','=',false)
        ->limit(1);
        self::slog('med_org',$db->compile());
        $db = $db
            ->execute()
            ->as_array();
        $return = array();
        if (!empty($db)) {
           return $db[0];
        }
        return $return;
    }

    static function GetOneMedOrgBySMO($smo)
    {
        $db = DB::select('id','dicid', 'name')
            ->from('med_org')
            ->where('smo','=',$smo)
            ->where('deleted','=',false)
            ->limit(1);
        self::slog('med_org',$db->compile());
        $db = $db
            ->execute()
            ->as_array();
        $return = array();
        if (!empty($db)) {
            return $db[0];
        }
        return $return;
    }

    static function GetOneForeignMedOrgBySMO($smo)
    {
        $db = DB::select('id')
            ->from('med_org_foreign')
            ->where('smo','=',$smo)
            ->limit(1);
        self::slog('med_org_foreign',$db->compile());
        $db = $db
            ->execute()
            ->as_array();
        if (!empty($db)) {
            return true;
        }else return false;
    }

    static function DelMedOrg($ids)
    {
        $db = DB::update('med_org')
            ->set(array('deleted'=>true));
            if(!empty($ids)){
                foreach($ids as $id){
                    $db->or_where('id','=',$id);
                }
            }
        self::ulog('med_org',$ids,$db->compile());
        $db->execute();
    }

    static function UpdMedOrg($changes)
    {
        if(!empty($changes))
            foreach($changes as $one){
                $id = $one['recid'];
                unset($one['recid']);
                if(!empty($one['name']))
                $one['name'] = htmlspecialchars_decode($one['name']);
                $db = DB::select()
                    ->from('med_org')
                    ->where('id','=',$id)
                    ->where('deleted','=',false)
                    ->limit(1)
                    ->execute()
                    ->as_array();
                if(!empty($db[0])) {
                    $db0 = DB::update('med_org')
                        ->set($one)
                        ->where('id', '=', $id);
                    self::ulog('med_org',$id,$db0->compile());
                    $db0
                        ->execute();
                }else{
                    $head = DB::select('id')
                        ->from('med_org')
                        ->where('dicid','=',$one['dicid'])
                        ->where('parentid','=',0)
                        ->limit(1)
                        ->execute()
                        ->as_array();
                    if(!empty($head[0]['id'])){
                        $one['parentid'] = $head[0]['id'];
                    }
                    $db0 = DB::insert('med_org',array_keys($one))
                        ->values($one);
                    self::ilog('med_org',$db0->compile());
                    $db0
                        ->execute();
                }
            }
    }

}

<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Tmp extends Controller_Template
{
    public $page;
    public $title = 'ИС "ИПРА" Демостенд';
    public $user = array();
    public $out_of_service = false;

private function trunc_log()
{
$now = date("Y-m-d");
//echo $now."\n";
$timestamp = strtotime($now);
//echo $timestamp."\n";
$week = 60*60*24*7;
$timestamp = $timestamp - $week;//one week
$date = date("Y-m-d", $timestamp);
//echo $date."\n";

$db = DB::delete('sys_log')
	->where('udt','<',$date)
//	->limit(100)
	->execute();
}

    public function before()
    {

	    $this->trunc_log();
            $session = Session::instance();
            $user = $session->get('user', false);
            if (empty($user)) {
                if (mb_strtolower($this->request->controller()) <> mb_strtolower('users'))
                    $this->redirect('/users');
            } else {
                if (($this->request->controller() == 'Users') && ($this->request->action() == 'logout')) {
                } else {
                    if (mb_strtolower($this->request->controller()) <> mb_strtolower($user['rights']))
                        $this->redirect('/' . $user['rights']);
                }
            }

            $this->user = $user;

        parent::before();
        $this->template->bind('page', $this->page);
        $this->template->bind('title', $this->title);
    }


    public function after()
    {
	$shuffle = $this->request->query('shuffle');
	if (!empty($shuffle)){

	    $db = DB::select(
            array('prg.id', 'id'),
            array('prg.lname', 'lname'),
            array('prg.fname', 'fname'),
            array('prg.sname', 'sname')
        )
            ->from(array('prg0', 'prg'));
            $db->order_by('prg.id', 'ASC');
        $db = $db
            ->execute()
            ->as_array();

        if (!empty($db)){
            foreach($db as $db_key=>$db_item){
                foreach($db_item as $item_key=>$item_value){
                    $db[$db_key][$item_key] = trim($item_value);
                }
            }
        }

          $Persons = $db;
            if(!empty($Persons)){
	    $length_array = count($Persons);
            foreach($Persons as $key => $Person) {

                $data['id'] = $Person['id'];
		$other_id = random_int(1, $length_array);
		$data['lname'] = $Persons[$other_id]['lname'];
		$other_id = random_int(1, $length_array);
		$data['fname'] = $Persons[$other_id]['fname'];
		$other_id = random_int(1, $length_array);
		$data['sname'] = $Persons[$other_id]['sname'];
                $data['snils']  = random_int(0, 9);$data['snils'] .= random_int(0, 9);$data['snils'] .= random_int(0, 9);
                $data['snils'] .= '-';
                $data['snils'] .= random_int(0, 9);$data['snils'] .= random_int(0, 9);$data['snils'] .= random_int(0, 9);
                $data['snils'] .= '-';
                $data['snils'] .= random_int(0, 9);$data['snils'] .= random_int(0, 9);$data['snils'] .= random_int(0, 9);
                $data['snils'] .= ' ';
                $data['snils'] .= random_int(0, 9);$data['snils'] .= random_int(0, 9);
		$db = DB::update('prg0')
                ->set($data)
                ->where('id', '=', $data['id']);
        	$db->execute();
        	Model_Ipra::RegenSearchStr($data['id']);

        	}
	    }
            die();
	}

        $cleanup = $this->request->query('cleanup');
        if (!empty($cleanup)) {
            $Persons = Model_Ipra::GetPersons();
            if(!empty($Persons))
            foreach($Persons as $Person) {
                for ($typeid = 1; $typeid <= 5; $typeid++) {
                    $IPRA = $db = DB::select(
                        array('prg_rhb.id', 'recid'),
                        array('prg_rhb.typeid', 'type'),
                        array('prg_rhb.evntid', 'event'),
                        array('prg_rhb.resid', 'resid'),
                        array('prg_rhb.result', 'result')
                    )
                        ->from(array('prg0_rhb', 'prg_rhb'))
                        ->where('prg_rhb.typeid','=',$typeid)
                        ->where('prg_rhb.prgid', '=', $Person['id'])
                        ->where('prg_rhb.resid', '=', '0')
                        ->where('prg_rhb.result', '=', '')
                        ->execute()
                        ->as_array();
                    if (count($IPRA) > 0) {
                        echo '<pre>';
                        print_r($IPRA);
                        echo '</pre>';
                        foreach($IPRA as $one){
                            DB::delete('prg0_rhb')
                                ->where('id','=',$one['recid'])
                                ->execute();
                        }
                    }
                }
            }
            die();
        }

            $uploads = $this->request->query('uploads');
        if (!empty($uploads)) {

            $dir = 'uploads';
            $file_list = array();
            if (is_dir($dir)) {
                if ($dh = opendir($dir)) {
                    while (($file = readdir($dh)) !== false) {
                        if (!(($file == '.') || ($file == '..'))) {
                            $file_list[] = $dir . '/' . $file;
                        }
                    }
                    closedir($dh);
                }
            }
            if (!empty($file_list)) {
                echo '<pre>';
                foreach ($file_list as $file) {
                    $xml = file_get_contents($file);
                    Model_Ipra::InsertXML($xml);
                    var_dump('FILE: ' . $file . ' OKAY<br>' . "\n");
                }
                echo '</pre>';
            }
        }

        $new_pass = $this->request->query('new_pass');
        if (!empty($new_pass)) {
            echo base64_encode(gzcompress($new_pass));
        }
        $search = $this->request->query('regen_search');
        if (!empty($search)) {
            $prg_count = DB::select('id')
                ->from('prg0')
                ->order_by('id','DESC')
                ->limit(1)
                ->execute()
                ->as_array();
            if(!empty($prg_count[0])) $prg_count = $prg_count[0]['id'];
            for($i=1; $i<=$prg_count;$i++){
                $record = DB::select()
                    ->from('prg0')
                    ->where('id','=',$i)
                    ->limit(1)
                    ->execute()
                    ->as_array();
                if(!empty($record)){
                    $r = $record[0];
                    $search_str = trim($r['dt']).' '.
                        trim($r['snils']).' '.
                        trim($r['lname']).' '.
                        trim($r['fname']).' '.
                        trim($r['sname']).' '.
                        trim($r['bdate']).' '.
//                        trim($r['docnum']).' '.
//                        trim($r['docdt']).' '.
                        trim($r['prgnum']).' '.
                        trim($r['prgdt']).' '.
                        trim($r['prgenddt']);
                    DB::update('prg0')
                        ->set(array('search'=>$search_str))
                        ->where('id','=',$i)
                        ->execute();
                }
            }
        }
        $regen_pass = $this->request->query('regen_lpu_pass');
        if (!empty($regen_pass)) {
            $csv = 'Логин;Пароль;'."\n";
            $users_count = DB::select('id')
                ->from('users')
                ->order_by('id','DESC')
                ->limit(1)
                ->execute()
                ->as_array();
            if(!empty($users_count[0])) $users_count = $users_count[0]['id'];
            for($i=1; $i<=$users_count;$i++){
                $record = DB::select('login','rights')
                    ->from('users')
                    ->where('id','=',$i)
                    ->where('rights','=','lpu')
                    ->where('active','=',true)
                    ->limit(1)
                    ->execute()
                    ->as_array();
                if(!empty($record[0])){
                    $pass = substr(md5(base64_encode(gzcompress(time().rand(0,65535)))),0,6);
                    $csv.=$record[0]['login'].';'.$pass.';'."\n";

                    DB::update('users')
                        ->set(array('password'=>base64_encode(gzcompress($pass))))
                        ->where('id','=',$i)
                        ->execute();

                }
            }
            die($csv);
        }
        //
        $test = $this->request->query('test');
        if (!empty($test)) {
            Model_Users::test();
        }
        $mysql = $this->request->query('mysql');
        if (!empty($mysql)) {
           $tables = array(
//               'med_org',
//               'prg0',
//               'prg0_rhb',
//               'prg_oiv',
//               'prg_okr',
//               'prg_reg',
//               'rhb_dic',
//               'rhb_evnt',
//               'rhb_exc',
//               'rhb_grp',
//               'rhb_gtsr',
//               'rhb_res',
//               'rhb_tsr',
//               'rhb_type',
//               'sys_log',
//               'users'
           );
            foreach($tables as $table){
                $db = DB::select()
                    ->from($table)
                    ->execute()
                    ->as_array();
                if(!empty($db)){
                    foreach($db as $one){
                        DB::insert($table,array_keys($one))
                            ->values($one)
                            ->execute('mysql');
                    }
                }
            }
        }
        //

        if(!empty($this->page->toolbar_cfg)) {
            $this->page->toolbar_cfg->user = $this->user;
            $this->page->toolbar_cfg->user['password'] = gzuncompress(base64_decode($this->page->toolbar_cfg->user['password']));
        }

        if($this->out_of_service){
            $session = Session::instance();
            $session->set('user', false);
            $this->page = View::factory('OOS');
        }
        parent::after();
    }
}

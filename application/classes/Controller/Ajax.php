<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller
{

    public function before()
    {
        $session = Session::instance();
        $user = $session->get('user', false);
        if (empty($user)) {
            die(json_encode(array('status' => 'error', 'message' => 'NOT AUTHORIZED')));
        }
        parent::before();
    }

    public function action_login()
    {
        if ($this->request->method() == Request::POST) {
            $post = $this->request->post();
            $login = $post['login'];
            $password = $post['password'];
            $user = Model_Login::checkUser($login, $password);
            if ($user) {
                $session = Session::instance();
                $session->set('user', $user);
                echo 'success';
            }
        }
    }

    public function action_xmlupload()
    {
        if ($this->request->method() == Request::POST) {
            $post = $this->request->post();
            if ($post['cmd'] == 'save-record') {

                $this->response->body(json_encode(array('status' => 'success')));

                foreach ($post['record']['file'] as $file) {
                    if (!empty($file['content']))
                        Model_Ipra::InsertXML(base64_decode($file['content'], true));

                }
            }
        }
    }

    public function action_lpupersonlist()
    {
        if ($this->request->method() == Request::GET) {
            $limit = $this->request->query('limit');
            $offset = $this->request->query('offset');
            $sort = $this->request->query('sort');
            $search = $this->request->query('search');
            $unassoc = $this->request->query('unassoc');
            $cmd = $this->request->query('cmd');
            if ($cmd == 'get-records') {
                if (!empty($unassoc)) {
                    $persons = Model_Ipra::GetPersonsUnassoc($sort, $limit, $offset);
                    $return['status'] = 'success';
                    $return['total'] = Model_Ipra::CountPersonsUnassoc();
                    if (!empty($return['total']))
                        foreach ($persons as $one) {

                            $one['recid'] = $one['id'];
                            unset($one['id']);
                            $one['med_org_txt'] = htmlspecialchars(trim($one['med_org_txt']));
                            $return['records'][] = $one;
                        }
                } else {
                    $persons = Model_Ipra::GetPersons($limit, $offset, $sort, $search);
                    $medorg = Model_Catalog::GetMedOrg(true);
                    $new = array();
                    foreach ($medorg as $one) {
                        $new[$one['dicid']] = $one['name'];
                    }
                    $medorg = $new;
                    unset($new);
                    $return['status'] = 'success';
                    $return['total'] = Model_Ipra::CountPersons($search);
                    if (!empty($return['total']))
                        foreach ($persons as $one) {

                            $one['recid'] = $one['id'];
                            unset($one['id']);
                            if ($one['gndr'] == '1') $one['gndr'] = 'Мужской';
                            if ($one['gndr'] == '2') $one['gndr'] = 'Женский';
                            if ($one['prg'] == '1') $one['prg'] = 'ИПР';
                            if ($one['prg'] == '2') $one['prg'] = 'ПРП';
                            if (!empty($medorg[$one['medorg']])) $one['medorg'] = $medorg[$one['medorg']];
                            else $one['medorg'] = '(не определено)';
                            if (empty($one['fname'])) $one['fname'] = '';
                            if (empty($one['sname'])) $one['sname'] = '';
                            if (empty($one['lname'])) $one['lname'] = '';
                            if (empty($one['snils'])) $one['snils'] = '';
                            if (empty($one['prgdt'])) $one['prgdt'] = '';
                            $one['ipra_list'] = Model_Ipra::GetPersonsIpra($one['recid']);
                            $return['records'][] = $one;
                        }
                }
                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
            }
        }
    }

    public function action_lpuipraeditform()
    {
        $form = View::factory('lpu/ipra_edit_form');
        $form->typeid = $this->request->param('id');
        $form->rhb_type = Model_Catalog::GetType();
        $form->rhb_evnt = Model_Catalog::GetEvent();
        $form->rhb_dic = Model_Catalog::GetDic();
        $form->rhb_tsr = Model_Catalog::GetTsr();
        $form->rhb_exc = Model_Catalog::GetExecutors();
        $form->rhb_res = Model_Catalog::GetResults();
        $this->response->body($form);
    }

    public function action_lpuipraeditformrecord()
    {
        if ($this->request->method() == Request::POST) {
            $recid = $this->request->post('recid');
            $cmd = $this->request->post('cmd');
            if ($cmd == 'get-record') {
                $record = Model_Ipra::GetPersonsIpraFull($recid);
                $record['recid'] = $record['id'];
                unset($record['id']);
                $record['name'] = str_replace('"', '\"', $record['name']);//($record['name']));
                $record['result'] = str_replace('"', '\"', $record['result']);//($record['result']));
                if (!empty($record['dt_exc']))
                    $timestamp_must_be = strtotime(str_replace('-', '.', $record['dt_exc']));
                else
                    $timestamp_must_be = 0;

                $now = date("Y-m-d");
                $timestamp_ready = strtotime(str_replace('-', '.', $now));
                if (0 == $timestamp_must_be)
                    $record['dt_exc'] = $now;
                else
                    if (($timestamp_must_be - $timestamp_ready) < strtotime('00.03.00')) {
                        $timestamp_ready = $timestamp_must_be - strtotime('00.03.00');
                        $record['dt_exc'] = date("Y-m-d", $timestamp_ready);
                    }
                // $record['dt_exc'] = $now;
                $return['status'] = 'success';
                $return['record'] = $record;
                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
            }

            if ($cmd == 'save-record') {
                $record = $this->request->post('record');
                $check = true;
                if(($record['typeid']=='2')&&($record['evntid']=='0')) {$check = false;$err_message = 'Не выбран подтип мероприятия';}
                if((empty($record['resid']))&&(empty($record['result']))) {$check = false;$err_message = 'Не указан результат исполнения';}
                if((!empty($record['resid']))&&(!empty($record['result']))) {$check = false;$err_message = 'Неверно указан результат исполнения';}

                if ($check) {
                    Model_Ipra::UpdPersonsIpraFull($record);
                    $return['status'] = 'success';
                }else{
                    $return['status'] = 'error';
                    $return['message'] = $err_message;
                }

                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
            }

        }

    }

    public function action_lpuoutgoinglist()
    {
        if ($this->request->method() == Request::GET) {
            $limit = $this->request->query('limit');
            $offset = $this->request->query('offset');
            $sort = $this->request->query('sort');
            $search = $this->request->query('search');
            $cmd = $this->request->query('cmd');
            if ($cmd == 'get-records') {

                $persons = Model_Ipra::GetPersons($limit, $offset, $sort, $search, true);
                $medorg = Model_Catalog::GetMedOrg(true);
                $new = array();
                foreach ($medorg as $one) {
                    $new[$one['dicid']] = $one['name'];
                }
                $medorg = $new;
                unset($new);
                $return['status'] = 'success';
                $return['total'] = Model_Ipra::CountPersons($search, true);
                if (!empty($return['total']))
                    foreach ($persons as $one) {
                        $one['recid'] = $one['id'];
                        unset($one['id']);
                        if (!empty($medorg[$one['medorg']])) $one['medorg'] = $medorg[$one['medorg']];
                        else $one['medorg'] = '(не определено)';
                        if (!empty($medorg[$one['medorgexecutorid']])) $one['medorgexecutorid'] = $medorg[$one['medorgexecutorid']];
                        else $one['medorgexecutorid'] = '(не определено)';
                        $return['records'][] = $one;
                    }

                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
            }
            if ($cmd == 'delete-records') {
                $selected = $this->request->query('selected');
                Model_Ipra::DeletePersons($selected);
                $return['status'] = 'success';
                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
            }
        }
    }

    public function action_lpuoutgoingupdate()
    {
        if ($this->request->method() == Request::POST) {
            $cmd = $this->request->post('cmd');
            if ($cmd == 'save-record') {
                $record = $this->request->post('record');
                $data['id'] = $record['id'];
                $data['dt'] = $record['dt'];
                $data['lname'] = $record['lname'];
                $data['fname'] = $record['fname'];
                $data['sname'] = $record['sname'];
                $data['bdate'] = $record['bdate'];
                $data['medorgexecutorid'] = (int)$record['medorgexecutorid'];
                $data['snils'] = substr($record['snils'], 0, 15);
//                $session = Session::instance();
//                $user = $session->get('user', false);
//                 $data['med_org_id'] = $user['med_org_id'];
                Model_Ipra::AddPerson($data);
                $return['status'] = 'success';
                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
            }

        }

    }

    public function action_statiprauploadform()
    {
        $form = View::factory('stat/upload/ipra_upload_form');
        $form->rhb_type = Model_Catalog::GetType();
        $form->rhb_evnt = Model_Catalog::GetEvent();
        $form->rhb_dic = Model_Catalog::GetDic();
        $form->rhb_tsr = Model_Catalog::GetTsr();
        $form->rhb_exc = Model_Catalog::GetExecutors();
        $form->rhb_res = Model_Catalog::GetResults();
        $this->response->body($form);
    }

    public function action_statipraassoclist()
    {
        if ($this->request->method() == Request::GET) {
            $limit = $this->request->query('limit');
            $offset = $this->request->query('offset');
            $sort = $this->request->query('sort');
            $cmd = $this->request->query('cmd');
            if ($cmd == 'get-records') {
                $persons = Model_Ipra::GetPersonsUnassoc($sort, $limit, $offset);
                $return['status'] = 'success';
                $return['total'] = Model_Ipra::CountPersonsUnassoc();
                if (!empty($return['total']))
                    foreach ($persons as $one) {

                        $one['recid'] = $one['id'];
                        unset($one['id']);
                        $one['complete'] = false;
                        $one['med_org_txt'] = htmlspecialchars(trim($one['med_org_txt']));
                        $one['fio'] = trim($one['lname']) . ' ' . trim($one['fname']) . ' ' . trim($one['sname']);
//                        unset($one['lname'], $one['fname'], $one['sname']);
                        $return['records'][] = $one;
                    }
                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
            }
        }
    }

    public function action_statipraassoclistcomplete()
    {
        if ($this->request->method() == Request::POST) {
            $id = $this->request->post('id');
            $med_org_id = $this->request->post('med_org_id');
            $cmd = $this->request->post('cmd');
            if ($cmd == 'save-record') {
                if (empty($med_org_id)) {
                    $session = Session::instance();
                    $user = $session->get('user', false);
                    $med_org_id = $user['med_org_id'];
                }
                Model_Ipra::AssocPerson($id, $med_org_id);
                $return['status'] = 'success';
                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
            }
        }

    }

    public function action_statiprareadylist()
    {
        if ($this->request->method() == Request::GET) {
            $limit = $this->request->query('limit');
            $offset = $this->request->query('offset');
            $search = $this->request->query('search');
            $cmd = $this->request->query('cmd');
            if ($cmd == 'get-records') {
                $persons = Model_Ipra::GetIpraReady($limit, $offset, $search);
                $return['status'] = 'success';
                $return['total'] = Model_Ipra::CountIpraReady($search);
                if (!empty($return['total']))
                    foreach ($persons as $one) {
                        $one['fio'] = trim($one['lname']) . ' ' . trim($one['fname']) . ' ' . trim($one['sname']);
                        unset($one['lname']);
                        unset($one['fname']);
                        unset($one['sname']);
                        if (!empty($one['dicid'])) {
                            $one['name'] = $one['dicid'];
                        } else if (!empty($one['tsrid'])) {
                            $one['name'] = $one['tsrid'];
                        } else $one['name'] = $one['ex_name'];
                        unset($one['dicid']);
                        unset($one['tsrid']);
                        unset($one['ex_name']);
                        if ($one['resid'] == '1') {
                            $one['result'] = 'Выполнено';
                        } else $one['result'] = 'Не выполнено';
                        unset($one['resid']);
                        $one['complete'] = false;
                        $one['med_org'] = htmlspecialchars(trim($one['med_org']));
                        $one['name'] = htmlspecialchars(trim($one['name']));
                        $one['event'] = htmlspecialchars(trim($one['event']));
                        $one['snils'] = htmlspecialchars(trim($one['snils']));
                        $return['records'][] = $one;
                    }
                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
            }
            if ($cmd == 'delete-records') {
                $records = $this->request->query('selected');
                Model_Ipra::DeleteIpra($records);
                $return['status'] = 'success';
                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
            }
            if ($cmd == 'submit-records') {
                $selected = $this->request->query('selected');
                Model_Ipra::SubmitIpra($selected);
                $return['status'] = 'success';
//                $return['records'] = $records;
                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
            }
        }
    }

    public function action_userlist()
    {
        if ($this->request->method() == Request::GET) {
            $limit = $this->request->query('limit');
            $offset = $this->request->query('offset');
            $sort = $this->request->query('sort');
            $search = $this->request->query('search');
            $cmd = $this->request->query('cmd');

            if ($cmd == 'get-records') {
                $users = Model_Users::GetAllUsers($limit, $offset, $sort, $search);
                $return['status'] = 'success';
                $return['total'] = Model_Users::GetAllUsersCount($search);
                if (!empty($return['total']))
                    foreach ($users as $one) {
                        if ($one['active']) $one['active'] = '&#9745;';
                        else $one['active'] = '<p>&#9744;</p>';
                        $return['records'][] = $one;
                    }
                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
            }
        }
    }

    public function action_usersupdate()
    {
        if ($this->request->method() == Request::POST) {
            $cmd = $this->request->post('cmd');
            if ($cmd == 'save-record') {
                $record = $this->request->post('record');
                $id = $record['recid'];
                $login = $record['login'];
                $password = $record['password'];
                $email = $record['email'];
                $rights = $record['rights'];
                $active = $record['active'];
                Model_Users::SaveUser($id, $login, $password, $email, $rights, $active);
                $return['status'] = 'success';
                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
            }
            if ($cmd == 'switch-active') {
                $id = $this->request->post('recid');
                Model_Users::SwitchUserActive($id);
                $return['status'] = 'success';
                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
            }
        }

    }

    public function action_adminusersassoclist()
    {
        if ($this->request->method() == Request::GET) {
            $limit = $this->request->query('limit');
            $offset = $this->request->query('offset');
            $cmd = $this->request->query('cmd');
            if ($cmd == 'get-records') {
                $list = Model_Users::GetUsersLpu($limit, $offset);
                $return['status'] = 'success';
                $return['total'] = Model_Users::GetUsersLpuCount();
                if (!empty($return['total']))
                    foreach ($list as $one) {
                        $return['records'][] = $one;
                    }
                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
            }
        }
    }

    public function action_adminusersassoclistcomplete()
    {
        if ($this->request->method() == Request::POST) {
            $id = $this->request->post('id');
            $med_org_id = $this->request->post('med_org_id');
            $cmd = $this->request->post('cmd');
            if ($cmd == 'assoc-medorg') {
                Model_Users::AssocUser($id, $med_org_id);
                $return['status'] = 'success';
                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
            }
        }

    }

    public function action_medorglist()
    {
        if ($this->request->method() == Request::POST) {
            $cmd = $this->request->post('cmd');

            if ($cmd == 'get-records') {
                $medorg = Model_Catalog::GetMedOrgUsers();
                foreach ($medorg as $key => $one) {
                    if (!empty($one['password']))
                        $medorg[$key]['password'] = gzuncompress(base64_decode($one['password']));
                }
                $return['status'] = 'success';
                $return['total'] = count($medorg);
                if (!empty($return['total']))
                    foreach ($medorg as $one) {
                        $one['recid'] = $one['id'];
                        unset($one['id']);
                        $one['name'] = htmlspecialchars(trim($one['name']));
                        $return['records'][] = $one;
                    }
                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
            }
            if ($cmd == 'delete-records') {
                $selected = $this->request->post('selected');
                Model_Catalog::DelMedOrg($selected);
                $return['status'] = 'success';
                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
            }

            if ($cmd == 'save-records') {
                $changes = $this->request->post('changes');
                Model_Catalog::UpdMedOrg($changes);
                $return['status'] = 'success';
                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
            }

        }
    }

    public function action_medorgcount()
    {
        if ($this->request->method() == Request::POST) {
            $cmd = $this->request->post('cmd');
            if ($cmd == 'get-records') {
                $from = $this->request->query('from');
                $to = $this->request->query('to');
                $medorg = Model_Ipra::GetIpraMedOrgCounted($from,$to);
                $ipra_ready = Model_Ipra::GetReadyIpraMedOrgCounted($from,$to);
                $persons = Model_Ipra::GetPersonsMedOrgCounted($from,$to);
                $counts = Model_Ipra::GetPersonsFullAndPartiallyMedOrgCounted($from,$to);
                $return['status'] = 'success';
                $return['total'] = count($medorg);
                if (!empty($medorg))
                    foreach ($medorg as $one) {
                        $one['name'] = htmlspecialchars(trim($one['name']));
                        $one['ipracomplete'] = 0;
                        if (!empty($ipra_ready))
                            foreach ($ipra_ready as $ready) {
                                if ($ready['recid'] == $one['recid']) {
                                    $one['ipracomplete'] = $ready['ipracomplete'];
                                }
                            }
                        $one['persons'] = 0;
                        if (!empty($persons))
                            foreach ($persons as $person) {
                                if ($person['recid'] == $one['recid']) {
                                    $one['persons'] = $person['persons'];
                                }
                            }
                        if(!empty($counts[$one['recid']])) {
                            $one['persons_ready'] = $counts[$one['recid']]['count_full'];
                            $one['persons_partially'] = $counts[$one['recid']]['count_partially'];
                        }else{
                            $one['persons_ready'] = $counts[0]['count_full'];
                            $one['persons_partially'] = $counts[0]['count_partially'];
                        }
                        $return['records'][] = $one;
                    }
                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
            }
        }
    }

    public function action_userprofileform()
    {
        $form = View::factory('userprofileform');
        $session = Session::instance();
        $user = $session->get('user', false);
        $form->id = $user['id'];
        $form->login = $user['login'];
        $form->password = $user['password'];
        $form->email = $user['email'];
        $this->response->body($form);
    }

    public function action_userprofileformcomplete()
    {
        if ($this->request->method() == Request::POST) {
            $cmd = $this->request->post('cmd');
            if ($cmd == 'save-record') {
                $record = $this->request->post('record');
                $return['status'] = 'success';
                $session = Session::instance();
                $user = $session->get('user', false);
                $id = $record['id'];
                $login = $record['login'];
                $password = $record['password'];
                $email = $record['email'];
                $rights = $user['rights'];
                $active = $user['active'];
                if ($user['id'] == $id)
                    Model_Users::SaveUser($id, $login, $password, $email, $rights, $active);
                else $return = array('status' => 'error', 'message' => 'IDs not same');
                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
                $user = Model_Login::checkUser($login, $password);
                $session = Session::instance();
                $session->set('user', $user);
            }
        }
    }

} // End Ajax

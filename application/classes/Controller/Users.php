<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Users extends Controller_Tmp
{


    public function action_login()
    {
        if ($this->request->method() == Request::POST) {
            $post = $this->request->post();
            $login = $post['login'];
            $password = $post['password'];
            $user = Model_Login::checkUser($login, $password);
            if ($user) {
                Model_Syslog::UserLogin($user['id']);
                $session = Session::instance();
                $session->set('user', $user);
                $this->redirect('/');
            }else{
                Model_Syslog::LoginError($post);
            }
        }
        $page = View::factory('login');
        $this->page = $page;

    }

    public function action_logout()
    {
        $session = Session::instance();
        $user = $session->get('user', false);
        Model_Syslog::UserLogout($user['id']);
        $session->set('user', false);
    }

    public function action_index()
    {
        $this->redirect('/users/login');
    }
}

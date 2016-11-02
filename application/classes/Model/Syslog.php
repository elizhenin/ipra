<?php defined('SYSPATH') or die('No direct script access.');

class Model_Syslog extends Model

{

    const USER_ERROR =  'USER_ERROR';
    const USER_LOGIN =  'USER_LOGIN';
    const USER_LOGOUT =  'USER_LOGOUT';
    const TABLE_ACCESS = 'TABLE_ACCESS';
    const TABLE_INSERT =  'TABLE_INSERT';
    const TABLE_UPDATE =  'TABLE_UPDATE';
    const TABLE_DELETE = 'TABLE_DELETE';

    static function WriteEvent($uid,$type,$table,$data)
    {

        $data = json_encode($data);
        DB::insert('sys_log',array('user_id','type','table','data'))
            ->values(array($uid,$type,$table,$data))
            ->execute();

    }

    static function UserLogin($uid)
    {
        $data = array(
            'client_ip'=>Request::$client_ip,
            'user_agent'=>Request::$user_agent
        );
        $insert = array(
            'user_id'=>$uid,
            'type'=>self::USER_LOGIN,
            'table_name'=>null,
            'data'=>json_encode($data)
        );

        DB::insert('sys_log',array_keys($insert))
            ->values($insert)
            ->execute();

    }

    static function LoginError($post)
    {
        $data = array(
            'client_ip'=>Request::$client_ip,
            'user_agent'=>Request::$user_agent,
            'post'=>$post
        );
        $insert = array(
            'user_id'=>0,
            'type'=>self::USER_ERROR,
            'table_name'=>null,
            'data'=>json_encode($data)
        );

        DB::insert('sys_log',array_keys($insert))
            ->values($insert)
            ->execute();

    }

    static function UserLogout($uid)
    {
        $data = array(
            'client_ip'=>Request::$client_ip,
            'user_agent'=>Request::$user_agent
        );
        $insert = array(
            'user_id'=>$uid,
            'type'=>self::USER_LOGOUT,
            'table_name'=>null,
            'data'=>json_encode($data)
        );

        DB::insert('sys_log',array_keys($insert))
            ->values($insert)
            ->execute();

    }

    static function TableAccess($uid,$table,$sql)
    {
//        $data = array(
//            'client_ip'=>Request::$client_ip,
//            'user_agent'=>Request::$user_agent,
//            'sql' => $sql
//        );
//        $insert = array(
//            'user_id'=>$uid,
//            'type'=>self::TABLE_ACCESS,
//            'table_name'=>$table,
//            'data'=>json_encode($data)
//        );
//        DB::insert('sys_log',array_keys($insert))
//            ->values($insert)
//            ->execute();
    }

    static function TableInsert($uid,$table,$sql)
    {
        $data = array(
            'client_ip'=>Request::$client_ip,
            'user_agent'=>Request::$user_agent,
            'sql' => $sql
        );
        $insert = array(
            'user_id'=>$uid,
            'type'=>self::TABLE_INSERT,
            'table_name'=>$table,
            'data'=>json_encode($data)
        );
        DB::insert('sys_log',array_keys($insert))
            ->values($insert)
            ->execute();
    }

    static function TableUpdate($uid,$table,$recid,$sql)
    {
        $db = DB::select()
            ->from($table);
        if(is_array($recid)){
            $db->and_where_open();
            foreach($recid as $id){
            $db->or_where('id','=',$id);
            }
            $db->and_where_close();
        }else
            $db->where('id','=',$recid);
        $db = $db
            ->execute()
            ->as_array();

        $data = array(
            'client_ip'=>Request::$client_ip,
            'user_agent'=>Request::$user_agent,
            'sql' => $sql,
            'prev'=>$db
        );
        $insert = array(
            'user_id'=>$uid,
            'type'=>self::TABLE_UPDATE,
            'table_name'=>$table,
            'data'=>json_encode($data)
        );
        DB::insert('sys_log',array_keys($insert))
            ->values($insert)
            ->execute();
    }

    static function TableDelete($uid,$table,$recid,$sql)
    {
        $db = DB::select()
            ->from($table);
        if(is_array($recid)){
            $db->and_where_open();
            foreach($recid as $id){
                $db->or_where('id','=',$id);
            }
            $db->and_where_close();
        }else
            $db->where('id','=',$recid);
        $db = $db
            ->execute()
            ->as_array();

        $data = array(
            'client_ip'=>Request::$client_ip,
            'user_agent'=>Request::$user_agent,
            'sql' => $sql,
            'prev'=>$db
        );
        $insert = array(
            'user_id'=>$uid,
            'type'=>self::TABLE_DELETE,
            'table_name'=>$table,
            'data'=>json_encode($data)
        );
        DB::insert('sys_log',array_keys($insert))
            ->values($insert)
            ->execute();
    }

}

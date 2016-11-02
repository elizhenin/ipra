<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-25 07:57:00 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host 172.20.44.2:8083. If you trust 172.20.44.2:8083, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /var/www/ipra/system/classes/Kohana/URL.php:144
2016-08-25 07:57:00 --- DEBUG: #0 /var/www/ipra/system/classes/Kohana/URL.php(144): Kohana_URL::base(true, false)
#1 /var/www/ipra/system/classes/Kohana/HTTP/Exception/Redirect.php(29): Kohana_URL::site('/users', true, false)
#2 /var/www/ipra/system/classes/Kohana/HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('/users')
#3 /var/www/ipra/system/classes/Kohana/Controller.php(127): Kohana_HTTP::redirect('/users', 302)
#4 /var/www/ipra/application/classes/Controller/Tmp.php(16): Kohana_Controller::redirect('/users')
#5 /var/www/ipra/system/classes/Kohana/Controller.php(69): Controller_Tmp->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lpu))
#8 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/ipra/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/ipra/system/classes/Kohana/URL.php:144
2016-08-25 10:25:02 --- EMERGENCY: Database_Exception [ 23502 ]: SQLSTATE[23502]: Not null violation: 7 ERROR:  null value in column "user_id" violates not-null constraint
DETAIL:  Failing row contains (124873, null, 2016-08-25 10:25:02.161782, USER_LOGOUT, null, {"client_ip":"10.36.136.11","user_agent":"Mozilla\/5.0 (Windows ...). [ INSERT INTO "sys_log" ("user_id", "type", "table", "data") VALUES (NULL, 'USER_LOGOUT', NULL, '{"client_ip":"10.36.136.11","user_agent":"Mozilla\/5.0 (Windows NT 5.1; rv:30.0) Gecko\/20100101 Firefox\/30.0"}') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-25 10:25:02 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "sy...', false, Array)
#1 /var/www/ipra/application/classes/Model/Syslog.php(79): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Users.php(32): Model_Syslog::UserLogout(NULL)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Users->action_logout()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-25 11:45:15 --- EMERGENCY: Database_Exception [ 23502 ]: SQLSTATE[23502]: Not null violation: 7 ERROR:  null value in column "user_id" violates not-null constraint
DETAIL:  Failing row contains (129819, null, 2016-08-25 11:45:15.769673, USER_LOGOUT, null, {"client_ip":"10.36.150.24","user_agent":"Mozilla\/5.0 (Windows ...). [ INSERT INTO "sys_log" ("user_id", "type", "table", "data") VALUES (NULL, 'USER_LOGOUT', NULL, '{"client_ip":"10.36.150.24","user_agent":"Mozilla\/5.0 (Windows NT 6.1; WOW64; rv:48.0) Gecko\/20100101 Firefox\/48.0"}') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-25 11:45:15 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "sy...', false, Array)
#1 /var/www/ipra/application/classes/Model/Syslog.php(79): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Users.php(32): Model_Syslog::UserLogout(NULL)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Users->action_logout()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-25 14:20:30 --- EMERGENCY: Database_Exception [ 23502 ]: SQLSTATE[23502]: Not null violation: 7 ERROR:  null value in column "user_id" violates not-null constraint
DETAIL:  Failing row contains (132454, null, 2016-08-25 14:20:30.635812, USER_LOGOUT, null, {"client_ip":"10.36.150.24","user_agent":"Mozilla\/5.0 (Windows ...). [ INSERT INTO "sys_log" ("user_id", "type", "table", "data") VALUES (NULL, 'USER_LOGOUT', NULL, '{"client_ip":"10.36.150.24","user_agent":"Mozilla\/5.0 (Windows NT 6.1; WOW64; rv:48.0) Gecko\/20100101 Firefox\/48.0"}') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-25 14:20:30 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "sy...', false, Array)
#1 /var/www/ipra/application/classes/Model/Syslog.php(79): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Users.php(32): Model_Syslog::UserLogout(NULL)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Users->action_logout()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-25 17:06:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-08-25 17:06:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-25 17:07:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysql' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-08-25 17:07:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-25 17:10:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-08-25 17:10:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-25 17:12:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-08-25 17:12:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-25 17:17:59 --- EMERGENCY: Database_Exception [ 42P01 ]: SQLSTATE[42P01]: Undefined table: 7 ERROR:  relation "thb_type" does not exist
LINE 1: SELECT * FROM "thb_type"
                      ^ [ SELECT * FROM "thb_type" ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-25 17:17:59 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM "...', false, Array)
#1 /var/www/ipra/application/classes/Controller/Tmp.php(159): Kohana_Database_Query->execute()
#2 /var/www/ipra/system/classes/Kohana/Controller.php(87): Controller_Tmp->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/ipra/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-25 17:19:06 --- EMERGENCY: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '7' for key 'PRIMARY' [ INSERT INTO med_org (id, name, dicid, deleted, parentid, smo) VALUES (7, 'БУЗ ВО «Воронежский областной клинический кожно-венерологический диспансер»                                                                                                                             ', 7, '0', 0, '') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-25 17:19:06 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO med...', false, Array)
#1 /var/www/ipra/application/classes/Controller/Tmp.php(165): Kohana_Database_Query->execute('mysql')
#2 /var/www/ipra/system/classes/Kohana/Controller.php(87): Controller_Tmp->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/ipra/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-25 17:19:27 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'table, data) VALUES (1, 0, '2016-08-22 12:11:04.225333', 'USER_ERROR', NULL, '{\' at line 1 [ INSERT INTO sys_log (id, user_id, udt, type, table, data) VALUES (1, 0, '2016-08-22 12:11:04.225333', 'USER_ERROR', NULL, '{\"client_ip\":\"10.36.208.49\",\"user_agent\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/52.0.2743.116 Safari\\/537.36\",\"post\":{\"login\":\"elizhenin\",\"password\":\"\",\"enter\":\"\"}}') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-25 17:19:27 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO sys...', false, Array)
#1 /var/www/ipra/application/classes/Controller/Tmp.php(165): Kohana_Database_Query->execute('mysql')
#2 /var/www/ipra/system/classes/Kohana/Controller.php(87): Controller_Tmp->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/ipra/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-25 17:21:02 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'table, data) VALUES (1, 0, '2016-08-22 12:11:04.225333', 'USER_ERROR', NULL, '{\' at line 1 [ INSERT INTO sys_log (id, user_id, udt, type, table, data) VALUES (1, 0, '2016-08-22 12:11:04.225333', 'USER_ERROR', NULL, '{\"client_ip\":\"10.36.208.49\",\"user_agent\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/52.0.2743.116 Safari\\/537.36\",\"post\":{\"login\":\"elizhenin\",\"password\":\"\",\"enter\":\"\"}}') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-25 17:21:02 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO sys...', false, Array)
#1 /var/www/ipra/application/classes/Controller/Tmp.php(165): Kohana_Database_Query->execute('mysql')
#2 /var/www/ipra/system/classes/Kohana/Controller.php(87): Controller_Tmp->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/ipra/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-25 17:24:34 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'table, data) VALUES (0, 'USER_ERROR', NULL, '{\"client_ip\":\"10.36.208.49\",\"u' at line 1 [ INSERT INTO sys_log (user_id, type, table, data) VALUES (0, 'USER_ERROR', NULL, '{\"client_ip\":\"10.36.208.49\",\"user_agent\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/52.0.2743.116 Safari\\/537.36\",\"post\":{\"login\":\"elizhenin\",\"password\":\"1984god\",\"enter\":\"\"}}') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-25 17:24:34 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO sys...', false, Array)
#1 /var/www/ipra/application/classes/Model/Syslog.php(60): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Users.php(20): Model_Syslog::LoginError(Array)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-25 17:26:10 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'table, data) VALUES (0, 'USER_ERROR', NULL, 'eyJjbGllbnRfaXAiOiIxMC4zNi4yMDguNDk' at line 1 [ INSERT INTO sys_log (user_id, type, table, data) VALUES (0, 'USER_ERROR', NULL, 'eyJjbGllbnRfaXAiOiIxMC4zNi4yMDguNDkiLCJ1c2VyX2FnZW50IjoiTW96aWxsYVwvNS4wIChYMTE7IExpbnV4IHg4Nl82NCkgQXBwbGVXZWJLaXRcLzUzNy4zNiAoS0hUTUwsIGxpa2UgR2Vja28pIENocm9tZVwvNTIuMC4yNzQzLjExNiBTYWZhcmlcLzUzNy4zNiIsInBvc3QiOnsibG9naW4iOiJlbGl6aGVuaW4iLCJwYXNzd29yZCI6IjE5ODRnb2QiLCJlbnRlciI6IiJ9fQ==') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-25 17:26:10 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO sys...', false, Array)
#1 /var/www/ipra/application/classes/Model/Syslog.php(60): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Users.php(20): Model_Syslog::LoginError(Array)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-25 17:32:54 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/ipra/system/classes/Kohana/Session.php:125
2016-08-25 17:32:54 --- DEBUG: #0 /var/www/ipra/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/ipra/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/ipra/application/classes/Controller/Tmp.php(12): Kohana_Session::instance()
#3 /var/www/ipra/system/classes/Kohana/Controller.php(69): Controller_Tmp->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/system/classes/Kohana/Session.php:125
2016-08-25 17:36:06 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column "table_name" of relation "sys_log" does not exist
LINE 1: INSERT INTO "sys_log" ("user_id", "type", "table_name", "dat...
                                                  ^ [ INSERT INTO "sys_log" ("user_id", "type", "table_name", "data") VALUES (1, 'USER_LOGIN', NULL, 'eyJjbGllbnRfaXAiOiIxMC4zNi4yMDguNDkiLCJ1c2VyX2FnZW50IjoiTW96aWxsYVwvNS4wIChYMTE7IExpbnV4IHg4Nl82NCkgQXBwbGVXZWJLaXRcLzUzNy4zNiAoS0hUTUwsIGxpa2UgR2Vja28pIENocm9tZVwvNTIuMC4yNzQzLjExNiBTYWZhcmlcLzUzNy4zNiJ9') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-25 17:36:06 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "sy...', false, Array)
#1 /var/www/ipra/application/classes/Model/Syslog.php(40): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Users.php(15): Model_Syslog::UserLogin(1)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-25 17:36:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function bajson_encode() ~ APPPATH/classes/Model/Syslog.php [ 35 ] in file:line
2016-08-25 17:36:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-25 17:36:46 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function bajson_encode() ~ APPPATH/classes/Model/Syslog.php [ 35 ] in file:line
2016-08-25 17:36:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
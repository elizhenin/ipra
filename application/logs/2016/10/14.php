<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-14 13:49:43 --- EMERGENCY: Database_Exception [ 23502 ]: SQLSTATE[23502]: Not null violation: 7 ERROR:  null value in column "user_id" violates not-null constraint
DETAIL:  Failing row contains (3542678, null, 2016-10-14 13:49:43.965881, USER_LOGOUT, null, {"client_ip":"10.36.208.49","user_agent":"Mozilla\/5.0 (Windows ...). [ INSERT INTO "sys_log" ("user_id", "type", "table_name", "data") VALUES (NULL, 'USER_LOGOUT', NULL, '{"client_ip":"10.36.208.49","user_agent":"Mozilla\/5.0 (Windows NT 6.1; WOW64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/53.0.2785.143 Safari\/537.36"}') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-14 13:49:43 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "sy...', false, Array)
#1 /var/www/ipra/application/classes/Model/Syslog.php(79): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Users.php(32): Model_Syslog::UserLogout(NULL)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Users->action_logout()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-14 13:49:49 --- EMERGENCY: Database_Exception [ 23502 ]: SQLSTATE[23502]: Not null violation: 7 ERROR:  null value in column "user_id" violates not-null constraint
DETAIL:  Failing row contains (3542679, null, 2016-10-14 13:49:49.13243, USER_LOGOUT, null, {"client_ip":"10.36.208.49","user_agent":"Mozilla\/5.0 (Windows ...). [ INSERT INTO "sys_log" ("user_id", "type", "table_name", "data") VALUES (NULL, 'USER_LOGOUT', NULL, '{"client_ip":"10.36.208.49","user_agent":"Mozilla\/5.0 (Windows NT 6.1; WOW64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/53.0.2785.143 Safari\/537.36"}') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-14 13:49:49 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "sy...', false, Array)
#1 /var/www/ipra/application/classes/Model/Syslog.php(79): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Users.php(32): Model_Syslog::UserLogout(NULL)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Users->action_logout()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-14 14:09:03 --- EMERGENCY: Database_Exception [ 22007 ]: SQLSTATE[22007]: Invalid datetime format: 7 ERROR:  invalid input syntax for type date: ""
LINE 1: ...                                    ', "dt_exc" = '', "resid...
                                                             ^ [ UPDATE "prg0_rhb" SET "typeid" = 3, "evntid" = 0, "dicid" = 0, "name" = '                                                                                                                   ', "dt_exc" = '', "resid" = 0, "par1" = 0, "par2" = 0, "par3" = 0, "result" = '                                                                                                               ', "note" = '                                                   ', "udt" = '2016-10-14 14:07:08.127236+03', "approved" = 'false' WHERE "id" = 86838 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-14 14:09:03 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE "prg0_rh...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(521): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(149): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-14 14:10:56 --- EMERGENCY: Database_Exception [ 22007 ]: SQLSTATE[22007]: Invalid datetime format: 7 ERROR:  invalid input syntax for type date: ""
LINE 1: ...                                    ', "dt_exc" = '', "resid...
                                                             ^ [ UPDATE "prg0_rhb" SET "typeid" = 3, "evntid" = 0, "dicid" = 0, "name" = '                                                                                                                    ', "dt_exc" = '', "resid" = 0, "par1" = 0, "par2" = 0, "par3" = 0, "result" = '                                                                                                                     ', "note" = '                                                   ', "udt" = '2016-10-14 14:07:08.127236+03', "approved" = 'false' WHERE "id" = 86838 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-14 14:10:56 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE "prg0_rh...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(521): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(149): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-14 15:05:55 --- EMERGENCY: Database_Exception [ 23502 ]: SQLSTATE[23502]: Not null violation: 7 ERROR:  null value in column "user_id" violates not-null constraint
DETAIL:  Failing row contains (3542740, null, 2016-10-14 15:05:55.020495, USER_LOGOUT, null, {"client_ip":"10.36.208.49","user_agent":"Mozilla\/5.0 (Windows ...). [ INSERT INTO "sys_log" ("user_id", "type", "table_name", "data") VALUES (NULL, 'USER_LOGOUT', NULL, '{"client_ip":"10.36.208.49","user_agent":"Mozilla\/5.0 (Windows NT 6.1; WOW64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/53.0.2785.143 Safari\/537.36"}') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-14 15:05:55 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "sy...', false, Array)
#1 /var/www/ipra/application/classes/Model/Syslog.php(79): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Users.php(32): Model_Syslog::UserLogout(NULL)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Users->action_logout()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
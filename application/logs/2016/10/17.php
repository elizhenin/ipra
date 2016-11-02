<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-17 12:15:49 --- EMERGENCY: Database_Exception [ 22007 ]: SQLSTATE[22007]: Invalid datetime format: 7 ERROR:  invalid input syntax for type date: ""
LINE 1: ...                                    ', "dt_exc" = '', "resid...
                                                             ^ [ UPDATE "prg0_rhb" SET "typeid" = 2, "evntid" = 0, "dicid" = 0, "name" = '                                                                                                                                ', "dt_exc" = '', "resid" = 1, "par1" = 0, "par2" = 0, "par3" = 0, "result" = '                                                                                                                                ', "note" = '                                                                ', "udt" = '2016-10-17 11:57:12.514212+03', "approved" = 'false' WHERE "id" = 86961 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-17 12:15:49 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE "prg0_rh...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(525): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(149): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-17 12:17:03 --- EMERGENCY: Database_Exception [ 22007 ]: SQLSTATE[22007]: Invalid datetime format: 7 ERROR:  invalid input syntax for type date: ""
LINE 1: ...                                               ', '', 0, 'Де...
                                                             ^ [ INSERT INTO "prg0_rhb" ("prgid", "typeid", "evntid", "dicid", "tsrid", "name", "dt_exc", "excid", "execut", "resid", "par1", "par2", "par3", "result", "note", "udt", "approved") VALUES (24310, 2, 2, 0, 0, '                                                                                                                                ', '', 0, 'Департамент здравоохранения Воронежской области                                                                                 ', 0, 0, 0, 0, '                                                                                                                                ', '                                                                ', '2016-10-17 12:16:27.928408+03', 'false') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-17 12:17:03 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "pr...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(503): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(149): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-17 12:47:35 --- EMERGENCY: Database_Exception [ 23502 ]: SQLSTATE[23502]: Not null violation: 7 ERROR:  null value in column "user_id" violates not-null constraint
DETAIL:  Failing row contains (3542994, null, 2016-10-17 12:47:35.178352, USER_LOGOUT, null, {"client_ip":"10.36.208.49","user_agent":"Mozilla\/5.0 (X11; Lin...). [ INSERT INTO "sys_log" ("user_id", "type", "table_name", "data") VALUES (NULL, 'USER_LOGOUT', NULL, '{"client_ip":"10.36.208.49","user_agent":"Mozilla\/5.0 (X11; Linux x86_64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/53.0.2785.143 Safari\/537.36"}') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-17 12:47:35 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "sy...', false, Array)
#1 /var/www/ipra/application/classes/Model/Syslog.php(79): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Users.php(32): Model_Syslog::UserLogout(NULL)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Users->action_logout()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
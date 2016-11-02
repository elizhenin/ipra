<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-06 10:31:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/Controller/Ajax.php [ 202 ] in /var/www/ipra/application/classes/Controller/Ajax.php:202
2016-10-06 10:31:50 --- DEBUG: #0 /var/www/ipra/application/classes/Controller/Ajax.php(202): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ipra/a...', 202, Array)
#1 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuoutgoingupdate()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ipra/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/ipra/application/classes/Controller/Ajax.php:202
2016-10-06 12:13:55 --- EMERGENCY: Database_Exception [ 22007 ]: SQLSTATE[22007]: Invalid datetime format: 7 ERROR:  invalid input syntax for type date: ""
LINE 1: ..."udt", "approved") VALUES (10434, 2, 0, 0, 0, '', '', 0, 'Де...
                                                             ^ [ INSERT INTO "prg0_rhb" ("prgid", "typeid", "evntid", "dicid", "tsrid", "name", "dt_exc", "excid", "execut", "resid", "par1", "par2", "par3", "result", "note", "udt", "approved") VALUES (10434, 2, 0, 0, 0, '', '', 0, 'Департамент здравоохранения Воронежской области                                                                                 ', 0, 0, 0, 0, '', 'умерла', '2016-09-07 19:48:38.188778+03', 'false') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-06 12:13:55 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "pr...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(499): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(148): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-06 13:35:57 --- EMERGENCY: Database_Exception [ 23502 ]: SQLSTATE[23502]: Not null violation: 7 ERROR:  null value in column "user_id" violates not-null constraint
DETAIL:  Failing row contains (3387543, null, 2016-10-06 13:35:57.131961, USER_LOGOUT, null, {"client_ip":"10.36.50.164","user_agent":"Mozilla\/5.0 (Windows ...). [ INSERT INTO "sys_log" ("user_id", "type", "table_name", "data") VALUES (NULL, 'USER_LOGOUT', NULL, '{"client_ip":"10.36.50.164","user_agent":"Mozilla\/5.0 (Windows NT 6.1) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/44.4.2403.3 Amigo\/44.4.2403.3 MRCHROME SOC Safari\/537.36"}') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-06 13:35:57 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "sy...', false, Array)
#1 /var/www/ipra/application/classes/Model/Syslog.php(79): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Users.php(32): Model_Syslog::UserLogout(NULL)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Users->action_logout()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-06 14:48:39 --- EMERGENCY: Database_Exception [ 22007 ]: SQLSTATE[22007]: Invalid datetime format: 7 ERROR:  invalid input syntax for type date: ""
LINE 1: ...                                    ', "dt_exc" = '', "resid...
                                                             ^ [ UPDATE "prg0_rhb" SET "typeid" = 2, "evntid" = 2, "dicid" = 0, "name" = '                                                                                                                                ', "dt_exc" = '', "resid" = 1, "par1" = 0, "par2" = 0, "par3" = 0, "result" = '                                                                                                                                ', "note" = '       умер                                                         ', "udt" = '2016-10-06 14:46:45.038325+03', "approved" = 'false' WHERE "id" = 86575 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-06 14:48:39 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE "prg0_rh...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(521): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(148): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-06 14:54:57 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: ""
LINE 1: ...ECT * FROM "prg0_rhb" AS "prg_rhb" WHERE "prg_rhb"."id" = ''
                                                                     ^ [ SELECT * FROM "prg0_rhb" AS "prg_rhb" WHERE "prg_rhb"."id" = '' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-06 14:54:57 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM "...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(461): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Model/Ipra.php(472): Model_Ipra::GetPersonsIpraFull('')
#3 /var/www/ipra/application/classes/Controller/Ajax.php(148): Model_Ipra::UpdPersonsIpraFull(Array)
#4 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/ipra/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-06 14:57:27 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: ""
LINE 1: ...ECT * FROM "prg0_rhb" AS "prg_rhb" WHERE "prg_rhb"."id" = ''
                                                                     ^ [ SELECT * FROM "prg0_rhb" AS "prg_rhb" WHERE "prg_rhb"."id" = '' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-06 14:57:27 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM "...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(461): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Model/Ipra.php(472): Model_Ipra::GetPersonsIpraFull('')
#3 /var/www/ipra/application/classes/Controller/Ajax.php(148): Model_Ipra::UpdPersonsIpraFull(Array)
#4 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/ipra/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
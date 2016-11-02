<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-09-30 08:28:41 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: ""
LINE 1: ...ECT * FROM "prg0_rhb" AS "prg_rhb" WHERE "prg_rhb"."id" = ''
                                                                     ^ [ SELECT * FROM "prg0_rhb" AS "prg_rhb" WHERE "prg_rhb"."id" = '' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-30 08:28:41 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM "...', false, Array)
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
2016-09-30 08:31:46 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: ""
LINE 1: ...ECT * FROM "prg0_rhb" AS "prg_rhb" WHERE "prg_rhb"."id" = ''
                                                                     ^ [ SELECT * FROM "prg0_rhb" AS "prg_rhb" WHERE "prg_rhb"."id" = '' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-30 08:31:46 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM "...', false, Array)
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
2016-09-30 08:48:47 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: "undefined"
LINE 1: SELECT * FROM "prg" WHERE "id" = 'undefined'
                                         ^ [ SELECT * FROM "prg" WHERE "id" = 'undefined' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-30 08:48:47 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM "...', false, Array)
#1 /var/www/ipra/application/classes/Model/Syslog.php(132): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Model/Ipra.php(27): Model_Syslog::TableUpdate(45, 'prg', 'undefined', 'UPDATE "prg0" S...')
#3 /var/www/ipra/application/classes/Model/Ipra.php(577): Model_Ipra::ulog('prg', 'undefined', 'UPDATE "prg0" S...')
#4 /var/www/ipra/application/classes/Controller/Ajax.php(272): Model_Ipra::AssocPerson('undefined', 41)
#5 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statipraassoclistcomplete()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/ipra/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-30 10:14:47 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: ""
LINE 1: ...ECT * FROM "prg0_rhb" AS "prg_rhb" WHERE "prg_rhb"."id" = ''
                                                                     ^ [ SELECT * FROM "prg0_rhb" AS "prg_rhb" WHERE "prg_rhb"."id" = '' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-30 10:14:47 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM "...', false, Array)
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
2016-09-30 11:46:30 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: ""
LINE 1: ...ECT * FROM "prg0_rhb" AS "prg_rhb" WHERE "prg_rhb"."id" = ''
                                                                     ^ [ SELECT * FROM "prg0_rhb" AS "prg_rhb" WHERE "prg_rhb"."id" = '' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-30 11:46:30 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM "...', false, Array)
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
2016-09-30 13:38:11 --- EMERGENCY: Database_Exception [ 22001 ]: SQLSTATE[22001]: String data, right truncated: 7 ERROR:  value too long for type character(64) [ INSERT INTO "prg0_rhb" ("prgid", "typeid", "evntid", "dicid", "tsrid", "name", "dt_exc", "excid", "execut", "resid", "par1", "par2", "par3", "result", "note", "udt", "approved") VALUES (25347, 2, 0, 0, 0, '', '2016-09-30', 0, 'Департамент здравоохранения Воронежской области                                                                                 ', 2, 0, 0, 0, '', 'По месту регистрации не проживает, в БУЗ ВО "Хохольская РБ" не наблюдается.', '2016-09-07 19:48:38.188778+03', 'false') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-30 13:38:11 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "pr...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(499): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(148): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-30 13:52:24 --- EMERGENCY: Database_Exception [ 23502 ]: SQLSTATE[23502]: Not null violation: 7 ERROR:  null value in column "user_id" violates not-null constraint
DETAIL:  Failing row contains (2969804, null, 2016-09-30 13:52:24.008471, USER_LOGOUT, null, {"client_ip":"10.36.42.1","user_agent":"Mozilla\/5.0 (Windows NT...). [ INSERT INTO "sys_log" ("user_id", "type", "table_name", "data") VALUES (NULL, 'USER_LOGOUT', NULL, '{"client_ip":"10.36.42.1","user_agent":"Mozilla\/5.0 (Windows NT 6.1; rv:49.0) Gecko\/20100101 Firefox\/49.0"}') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-30 13:52:24 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "sy...', false, Array)
#1 /var/www/ipra/application/classes/Model/Syslog.php(79): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Users.php(32): Model_Syslog::UserLogout(NULL)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Users->action_logout()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-30 13:53:04 --- EMERGENCY: Database_Exception [ 23502 ]: SQLSTATE[23502]: Not null violation: 7 ERROR:  null value in column "user_id" violates not-null constraint
DETAIL:  Failing row contains (2970009, null, 2016-09-30 13:53:04.287881, USER_LOGOUT, null, {"client_ip":"10.36.42.1","user_agent":"Mozilla\/5.0 (Windows NT...). [ INSERT INTO "sys_log" ("user_id", "type", "table_name", "data") VALUES (NULL, 'USER_LOGOUT', NULL, '{"client_ip":"10.36.42.1","user_agent":"Mozilla\/5.0 (Windows NT 6.1; rv:49.0) Gecko\/20100101 Firefox\/49.0"}') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-30 13:53:04 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "sy...', false, Array)
#1 /var/www/ipra/application/classes/Model/Syslog.php(79): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Users.php(32): Model_Syslog::UserLogout(NULL)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Users->action_logout()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-30 14:14:33 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: ""
LINE 1: ...ECT * FROM "prg0_rhb" AS "prg_rhb" WHERE "prg_rhb"."id" = ''
                                                                     ^ [ SELECT * FROM "prg0_rhb" AS "prg_rhb" WHERE "prg_rhb"."id" = '' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-30 14:14:33 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM "...', false, Array)
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
2016-09-30 14:56:34 --- EMERGENCY: Database_Exception [ 22001 ]: SQLSTATE[22001]: String data, right truncated: 7 ERROR:  value too long for type character(128) [ INSERT INTO "prg0_rhb" ("prgid", "typeid", "evntid", "dicid", "tsrid", "name", "dt_exc", "excid", "execut", "resid", "par1", "par2", "par3", "result", "note", "udt", "approved") VALUES (15445, 2, 2, 0, 0, 'кардимагнил 75мг/сут, эналаприл 10 мг- 2р/сут, постоянно, конкор 125 мг/д -постоянно, предуктал МВ 1т*1р/д - курсами по 60 дней , метформин 1000 мг/сут', '2016-09-30', 0, 'Департамент здравоохранения Воронежской области                                                                                 ', 1, 0, 0, 0, '', '', '2016-09-07 19:48:38.188778+03', 'false') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-30 14:56:34 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "pr...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(499): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(148): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-30 17:20:50 --- EMERGENCY: Database_Exception [ 22001 ]: SQLSTATE[22001]: String data, right truncated: 7 ERROR:  value too long for type character(128) [ INSERT INTO "prg0_rhb" ("prgid", "typeid", "evntid", "dicid", "tsrid", "name", "dt_exc", "excid", "execut", "resid", "par1", "par2", "par3", "result", "note", "udt", "approved") VALUES (2157, 2, 1, 0, 0, 'наблюдение эндокринолога ВОДКБ №1, стационарное лечение в эндокринологическом отделении в ВОДКБ №1,наблюдение участкового врача-педиатра', '2016-09-30', 0, 'Департамент здравоохранения Воронежской области                                                                                 ', 1, 0, 0, 0, '', '', '2016-09-07 19:48:38.188778+03', 'false') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-30 17:20:50 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "pr...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(499): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(148): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
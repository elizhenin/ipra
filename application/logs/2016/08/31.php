<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-31 10:53:40 --- EMERGENCY: Database_Exception [ 22001 ]: SQLSTATE[22001]: String data, right truncated: 7 ERROR:  value too long for type character(64) [ INSERT INTO "prg0_rhb" ("prgid", "typeid", "evntid", "dicid", "tsrid", "name", "dt_exc", "excid", "execut", "resid", "par1", "par2", "par3", "result", "note", "udt", "approved") VALUES (12926, 2, 2, 0, 0, 'Гипотензивные препараты', '2017-08-01', 0, 'Департамент здравоохранения Воронежской области                                                                                 ', 1, 0, 0, 0, '', 'Динамическое наблюдение по месту жительства, лекарственная терапия, стационарное лечение ', '2016-08-16 16:00:48.033799+03', 'false') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-31 10:53:40 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "pr...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(403): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(127): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-31 11:15:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: password ~ APPPATH/classes/Controller/Tmp.php [ 178 ] in /var/www/ipra/application/classes/Controller/Tmp.php:178
2016-08-31 11:15:57 --- DEBUG: #0 /var/www/ipra/application/classes/Controller/Tmp.php(178): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ipra/a...', 178, Array)
#1 /var/www/ipra/system/classes/Kohana/Controller.php(87): Controller_Tmp->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ipra/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/ipra/application/classes/Controller/Tmp.php:178
2016-08-31 11:17:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: password ~ APPPATH/classes/Controller/Tmp.php [ 178 ] in /var/www/ipra/application/classes/Controller/Tmp.php:178
2016-08-31 11:17:08 --- DEBUG: #0 /var/www/ipra/application/classes/Controller/Tmp.php(178): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ipra/a...', 178, Array)
#1 /var/www/ipra/system/classes/Kohana/Controller.php(87): Controller_Tmp->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lpu))
#4 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ipra/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/ipra/application/classes/Controller/Tmp.php:178
2016-08-31 11:18:04 --- EMERGENCY: Database_Exception [ 23502 ]: SQLSTATE[23502]: Not null violation: 7 ERROR:  null value in column "user_id" violates not-null constraint
DETAIL:  Failing row contains (241115, null, 2016-08-31 11:18:04.813853, TABLE_ACCESS, med_org, {"client_ip":"10.136.0.232","user_agent":"Mozilla\/5.0 (X11; Lin...). [ INSERT INTO "sys_log" ("user_id", "type", "table_name", "data") VALUES (NULL, 'TABLE_ACCESS', 'med_org', '{"client_ip":"10.136.0.232","user_agent":"Mozilla\/5.0 (X11; Linux x86_64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/52.0.2743.116 Safari\/537.36","sql":"SELECT \"id\", \"dicid\", \"name\" FROM \"med_org\" WHERE \"deleted\" = ''0'' ORDER BY \"id\" ASC"}') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-31 11:18:04 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "sy...', false, Array)
#1 /var/www/ipra/application/classes/Model/Syslog.php(98): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Model/Catalog.php(12): Model_Syslog::TableAccess(NULL, 'med_org', 'SELECT "id", "d...')
#3 /var/www/ipra/application/classes/Model/Catalog.php(143): Model_Catalog::slog('med_org', 'SELECT "id", "d...')
#4 /var/www/ipra/application/classes/Controller/Admin.php(11): Model_Catalog::GetMedOrg()
#5 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Admin->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/ipra/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-31 11:20:05 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Tmp.php [ 186 ] in file:line
2016-08-31 11:20:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-31 11:22:54 --- EMERGENCY: Database_Exception [ 23502 ]: SQLSTATE[23502]: Not null violation: 7 ERROR:  null value in column "user_id" violates not-null constraint
DETAIL:  Failing row contains (241116, null, 2016-08-31 11:22:54.616025, TABLE_INSERT, prg, {"client_ip":"10.136.0.232","user_agent":"Mozilla\/5.0 (X11; Lin...). [ INSERT INTO "sys_log" ("user_id", "type", "table_name", "data") VALUES (NULL, 'TABLE_INSERT', 'prg', '{"client_ip":"10.136.0.232","user_agent":"Mozilla\/5.0 (X11; Linux x86_64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/52.0.2743.116 Safari\/537.36","sql":"INSERT INTO \"prg0\" (\"okr_id\", \"nreg\", \"dt\", \"snils\", \"lname\", \"fname\", \"sname\", \"bdate\", \"gndr\", \"oivid\", \"docnum\", \"docdt\", \"prg\", \"prgnum\", \"prgdt\", \"mseid\", \"med_org_txt\", \"search\") VALUES (''1'', ''36'', NOW(), ''158-849-409 28'', ''\u041a\u0443\u0449\u0438\u043a'', ''\u0412\u0438\u043a\u0442\u043e\u0440\u0438\u044f'', ''\u041f\u0430\u0432\u043b\u043e\u0432\u043d\u0430'', ''2003-05-07'', 2, ''1'', ''328.22.36\/2016'', ''2016-04-08'', 1, ''310.22.36\/2016'', ''2016-04-08'', ''000446c3-c50b-49ae-a5ff-74f1c1516161'', ''\u0411\u0423\u0417 \u0412\u041e \u00ab\u0420\u043e\u0441\u0441\u043e\u0448\u0430\u043d\u0441\u043a\u0430\u044f \u0420\u0411\u00bb'', ''NOW()158-849-409 28\u041a\u0443\u0449\u0438\u043a \u0412\u0438\u043a\u0442\u043e\u0440\u0438\u044f \u041f\u0430\u0432\u043b\u043e\u0432\u043d\u04302003-05-07328.22.36\/20162016-04-08310.22.36\/20162016-04-08'')"}') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-31 11:22:54 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "sy...', false, Array)
#1 /var/www/ipra/application/classes/Model/Syslog.php(116): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Model/Ipra.php(19): Model_Syslog::TableInsert(NULL, 'prg', 'INSERT INTO "pr...')
#3 /var/www/ipra/application/classes/Model/Ipra.php(133): Model_Ipra::ilog('prg', 'INSERT INTO "pr...')
#4 /var/www/ipra/application/classes/Controller/Tmp.php(54): Model_Ipra::InsertXML('???<?xml versio...')
#5 /var/www/ipra/system/classes/Kohana/Controller.php(87): Controller_Tmp->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/ipra/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-31 11:23:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: snils ~ APPPATH/classes/Model/Ipra.php [ 103 ] in /var/www/ipra/application/classes/Model/Ipra.php:103
2016-08-31 11:23:55 --- DEBUG: #0 /var/www/ipra/application/classes/Model/Ipra.php(103): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ipra/a...', 103, Array)
#1 /var/www/ipra/application/classes/Controller/Tmp.php(54): Model_Ipra::InsertXML('???<?xml versio...')
#2 /var/www/ipra/system/classes/Kohana/Controller.php(87): Controller_Tmp->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/ipra/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/ipra/application/classes/Model/Ipra.php:103
2016-08-31 12:14:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Model/Ipra.php [ 298 ] in file:line
2016-08-31 12:14:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-31 12:15:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Model/Ipra.php [ 298 ] in file:line
2016-08-31 12:15:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-31 12:16:34 --- EMERGENCY: Database_Exception [ 22007 ]: SQLSTATE[22007]: Invalid datetime format: 7 ERROR:  invalid input syntax for type date: "Дата рождения"
LINE 1: ...ND "prg"."sname" = 'Отчество' AND "prg"."bdate" = 'Дата рожд...
                                                             ^ [ SELECT "prg"."id" AS "id" FROM "prg0" AS "prg" JOIN "prg_okr" ON ("prg_okr"."id" = "prg"."okr_id") JOIN "prg_reg" ON ("prg_reg"."id" = "prg"."nreg") JOIN "prg_oiv" ON ("prg_oiv"."id" = "prg"."oivid") WHERE "prg"."lname" = 'Фамилия' AND "prg"."fname" = 'Имя' AND "prg"."sname" = 'Отчество' AND "prg"."bdate" = 'Дата рождения' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-31 12:16:34 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg"."i...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(313): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Stat.php(23): Model_Ipra::GetOnePersonByFIObdate('??????????????', '??????', '???????????????...', '???????? ??????...')
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Stat->action_upload()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Stat))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-31 13:41:53 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(): Filename cannot be empty ~ APPPATH/classes/Controller/Stat.php [ 15 ] in file:line
2016-08-31 13:41:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/var/www/ipra/a...', 15, Array)
#1 /var/www/ipra/application/classes/Controller/Stat.php(15): file_get_contents('')
#2 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Stat->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Stat))
#5 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/ipra/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-08-31 15:38:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting '(' ~ APPPATH/classes/Controller/Admin.php [ 23 ] in file:line
2016-08-31 15:38:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-31 15:39:02 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/classes/Controller/Admin.php [ 24 ] in file:line
2016-08-31 15:39:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-31 15:39:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$page' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin.php [ 38 ] in file:line
2016-08-31 15:39:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-31 15:40:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Insert::$execute ~ APPPATH/classes/Controller/Admin.php [ 29 ] in /var/www/ipra/application/classes/Controller/Admin.php:29
2016-08-31 15:40:18 --- DEBUG: #0 /var/www/ipra/application/classes/Controller/Admin.php(29): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/ipra/a...', 29, Array)
#1 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Admin->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ipra/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/ipra/application/classes/Controller/Admin.php:29
2016-08-31 15:40:49 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: "\N"
LINE 1: ..., 'Иванович                      ', '1957-06-10', '\N', '1',...
                                                             ^ [ INSERT INTO "prg0" ("id", "okr_id", "nreg", "dt", "snils", "lname", "fname", "sname", "bdate", "gndr", "oivid", "docnum", "docdt", "prg", "prgnum", "prgdt", "mseid", "udt", "med_org_txt", "med_org_id", "search") VALUES ('14', '1', '36', '2016-08-16', '142-095-766 58 ', 'Нефедов                       ', 'Александр                     ', 'Иванович                      ', '1957-06-10', '\N', '1', '92.29.36/2016       ', '2016-01-28', '1', '80.29.36/2016       ', '2016-01-28', '001774bc-44fa-4e6d-b659-0f8ec2b7d178', '2016-08-23 11:57:13.699918+03', '\N', '60', '2016-08-16142-095-766 58Нефедов Александр Иванович1957-06-1092.29.36/20162016-01-2880.29.36/20162016-01-28') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-31 15:40:49 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "pr...', false, Array)
#1 /var/www/ipra/application/classes/Controller/Admin.php(29): Kohana_Database_Query->execute()
#2 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Admin->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/ipra/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-31 15:42:02 --- EMERGENCY: Database_Exception [ 23505 ]: SQLSTATE[23505]: Unique violation: 7 ERROR:  duplicate key value violates unique constraint "prg0_pkey"
DETAIL:  Key (id)=(8548) already exists. [ INSERT INTO "prg0" ("id", "okr_id", "nreg", "dt", "snils", "lname", "fname", "sname", "bdate", "gndr", "oivid", "docnum", "docdt", "prg", "prgnum", "prgdt", "mseid", "udt", "med_org_txt", "med_org_id", "search") VALUES ('8548', '1', '36', '2016-08-16', '035-278-960 76 ', 'Усков                         ', 'Валентин                      ', 'Михайлович                    ', '1952-07-21', '1', '1', '558.5.36/2016       ', '2016-05-11', '1', '484.5.36/2016       ', '2016-05-10', '55022548-c43d-4961-8d08-0a508bcec684', '2016-08-18 13:01:32.50654+03', 'пол-ка 2                                                                                                                                                                                                                                                                                                    ', '0', '2016-08-16035-278-960 76Усков Валентин Михайлович1952-07-21558.5.36/20162016-05-11484.5.36/20162016-05-10') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-31 15:42:02 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "pr...', false, Array)
#1 /var/www/ipra/application/classes/Controller/Admin.php(30): Kohana_Database_Query->execute()
#2 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Admin->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/ipra/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-31 15:46:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/Controller/Admin.php [ 25 ] in /var/www/ipra/application/classes/Controller/Admin.php:25
2016-08-31 15:46:57 --- DEBUG: #0 /var/www/ipra/application/classes/Controller/Admin.php(25): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/ipra/a...', 25, Array)
#1 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Admin->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ipra/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/ipra/application/classes/Controller/Admin.php:25
2016-08-31 15:47:57 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 399 ] in /var/www/ipra/application/classes/Controller/Ajax.php:399
2016-08-31 15:47:57 --- DEBUG: #0 /var/www/ipra/application/classes/Controller/Ajax.php(399): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/ipra/a...', 399, Array)
#1 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorgcount()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ipra/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/ipra/application/classes/Controller/Ajax.php:399
2016-08-31 16:35:20 --- EMERGENCY: Database_Exception [ 23502 ]: SQLSTATE[23502]: Not null violation: 7 ERROR:  null value in column "user_id" violates not-null constraint
DETAIL:  Failing row contains (810658, null, 2016-08-31 16:35:20.925592, USER_LOGOUT, null, {"client_ip":"10.136.0.232","user_agent":"Mozilla\/5.0 (X11; Lin...). [ INSERT INTO "sys_log" ("user_id", "type", "table_name", "data") VALUES (NULL, 'USER_LOGOUT', NULL, '{"client_ip":"10.136.0.232","user_agent":"Mozilla\/5.0 (X11; Linux x86_64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/52.0.2743.116 Safari\/537.36"}') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-31 16:35:20 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "sy...', false, Array)
#1 /var/www/ipra/application/classes/Model/Syslog.php(79): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Users.php(32): Model_Syslog::UserLogout(NULL)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Users->action_logout()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-31 16:48:03 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function sqlite_open() ~ APPPATH/classes/Controller/Admin.php [ 9 ] in file:line
2016-08-31 16:48:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-31 16:48:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function sqlite3_open() ~ APPPATH/classes/Controller/Admin.php [ 9 ] in file:line
2016-08-31 16:48:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
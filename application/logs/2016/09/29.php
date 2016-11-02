<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-09-29 10:09:53 --- EMERGENCY: Database_Exception [ 23502 ]: SQLSTATE[23502]: Not null violation: 7 ERROR:  null value in column "user_id" violates not-null constraint
DETAIL:  Failing row contains (2821195, null, 2016-09-29 10:09:53.207989, USER_LOGOUT, null, {"client_ip":"10.36.80.33","user_agent":"Mozilla\/5.0 (Windows N...). [ INSERT INTO "sys_log" ("user_id", "type", "table_name", "data") VALUES (NULL, 'USER_LOGOUT', NULL, '{"client_ip":"10.36.80.33","user_agent":"Mozilla\/5.0 (Windows NT 6.1) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/53.0.2785.116 Safari\/537.36"}') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-29 10:09:53 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "sy...', false, Array)
#1 /var/www/ipra/application/classes/Model/Syslog.php(79): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Users.php(32): Model_Syslog::UserLogout(NULL)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Users->action_logout()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-29 10:16:36 --- EMERGENCY: Database_Exception [ 23502 ]: SQLSTATE[23502]: Not null violation: 7 ERROR:  null value in column "user_id" violates not-null constraint
DETAIL:  Failing row contains (2821654, null, 2016-09-29 10:16:36.611546, USER_LOGOUT, null, {"client_ip":"10.36.39.200","user_agent":"Mozilla\/5.0 (Windows ...). [ INSERT INTO "sys_log" ("user_id", "type", "table_name", "data") VALUES (NULL, 'USER_LOGOUT', NULL, '{"client_ip":"10.36.39.200","user_agent":"Mozilla\/5.0 (Windows NT 6.1; Win64; x64; rv:49.0) Gecko\/20100101 Firefox\/49.0"}') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-29 10:16:36 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "sy...', false, Array)
#1 /var/www/ipra/application/classes/Model/Syslog.php(79): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Users.php(32): Model_Syslog::UserLogout(NULL)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Users->action_logout()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-29 10:25:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: recid ~ APPPATH/classes/Model/Ipra.php [ 469 ] in /var/www/ipra/application/classes/Model/Ipra.php:469
2016-09-29 10:25:08 --- DEBUG: #0 /var/www/ipra/application/classes/Model/Ipra.php(469): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ipra/a...', 469, Array)
#1 /var/www/ipra/application/classes/Controller/Ajax.php(148): Model_Ipra::UpdPersonsIpraFull(Array)
#2 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/ipra/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/ipra/application/classes/Model/Ipra.php:469
2016-09-29 10:26:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: recid ~ APPPATH/classes/Model/Ipra.php [ 469 ] in /var/www/ipra/application/classes/Model/Ipra.php:469
2016-09-29 10:26:29 --- DEBUG: #0 /var/www/ipra/application/classes/Model/Ipra.php(469): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ipra/a...', 469, Array)
#1 /var/www/ipra/application/classes/Controller/Ajax.php(148): Model_Ipra::UpdPersonsIpraFull(Array)
#2 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/ipra/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/ipra/application/classes/Model/Ipra.php:469
2016-09-29 15:22:21 --- EMERGENCY: Database_Exception [ 23502 ]: SQLSTATE[23502]: Not null violation: 7 ERROR:  null value in column "user_id" violates not-null constraint
DETAIL:  Failing row contains (2872484, null, 2016-09-29 15:22:22.001955, USER_LOGOUT, null, {"client_ip":"10.36.18.29","user_agent":"Mozilla\/5.0 (Windows N...). [ INSERT INTO "sys_log" ("user_id", "type", "table_name", "data") VALUES (NULL, 'USER_LOGOUT', NULL, '{"client_ip":"10.36.18.29","user_agent":"Mozilla\/5.0 (Windows NT 6.1; rv:49.0) Gecko\/20100101 Firefox\/49.0"}') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-29 15:22:21 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "sy...', false, Array)
#1 /var/www/ipra/application/classes/Model/Syslog.php(79): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Users.php(32): Model_Syslog::UserLogout(NULL)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Users->action_logout()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-29 15:47:14 --- EMERGENCY: Database_Exception [ 22001 ]: SQLSTATE[22001]: String data, right truncated: 7 ERROR:  value too long for type character(64) [ INSERT INTO "prg0_rhb" ("prgid", "typeid", "evntid", "dicid", "tsrid", "name", "dt_exc", "excid", "execut", "resid", "par1", "par2", "par3", "result", "note", "udt", "approved") VALUES (22184, 2, 1, 0, 0, '', '2016-09-29', 0, 'Департамент здравоохранения Воронежской области                                                                                 ', 0, 0, 0, 0, 'Живет в г. Воронеж, наблюдается у фтизиатра МУЗ ВО "ВОКПТД им. Похвистневой"', 'Живет в г. Воронеж, наблюдается у фтизиатра МУЗ ВО "ВОКПТД им. Похвистневой"', '2016-09-07 19:48:38.188778+03', 'false') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-29 15:47:14 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "pr...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(499): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(148): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-29 15:49:33 --- EMERGENCY: Database_Exception [ 22001 ]: SQLSTATE[22001]: String data, right truncated: 7 ERROR:  value too long for type character(64) [ INSERT INTO "prg0_rhb" ("prgid", "typeid", "evntid", "dicid", "tsrid", "name", "dt_exc", "excid", "execut", "resid", "par1", "par2", "par3", "result", "note", "udt", "approved") VALUES (22184, 2, 1, 0, 0, '', '2016-09-29', 0, 'Департамент здравоохранения Воронежской области                                                                                 ', 0, 0, 0, 0, 'Живет в г. Воронеж, наблюдается у фтизиатра МУЗ ВО "ВОКПТД им. Похвистневой"', 'Живет в г. Воронеж, наблюдается у фтизиатра МУЗ ВО "ВОКПТД им. Похвистневой"', '2016-09-07 19:48:38.188778+03', 'false') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-29 15:49:33 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "pr...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(499): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(148): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-29 15:52:32 --- EMERGENCY: Database_Exception [ 22001 ]: SQLSTATE[22001]: String data, right truncated: 7 ERROR:  value too long for type character(64) [ INSERT INTO "prg0_rhb" ("prgid", "typeid", "evntid", "dicid", "tsrid", "name", "dt_exc", "excid", "execut", "resid", "par1", "par2", "par3", "result", "note", "udt", "approved") VALUES (22184, 2, 0, 0, 0, '', '2016-09-29', 0, 'Департамент здравоохранения Воронежской области                                                                                 ', 0, 0, 0, 0, '', 'Живет в г. Воронеж, наблюдается у фтизиатра МУЗ ВО "ВОКПТД им. Похвистневой"', '2016-09-07 19:48:38.188778+03', 'false') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-29 15:52:32 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "pr...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(499): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(148): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
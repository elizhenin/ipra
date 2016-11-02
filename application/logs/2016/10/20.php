<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-20 10:02:39 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column prg.medorgexecutorid does not exist
LINE 1: ...rgdt" AS "prgdt", "prg"."med_org_id" AS "medorg", "prg"."med...
                                                             ^ [ SELECT "prg"."id" AS "id", "prg_okr"."name" AS "okrug", "prg_reg"."name" AS "region", "prg"."nreg" AS "nreg", "prg"."dt" AS "dt", "prg"."snils" AS "snils", "prg"."mseid" AS "mseid", "prg"."lname" AS "lname", "prg"."fname" AS "fname", "prg"."sname" AS "sname", "prg"."bdate" AS "bdate", "prg"."gndr" AS "gndr", "prg_oiv"."name" AS "org_isp_vlast", "prg"."docnum" AS "docnum", "prg"."docdt" AS "docdt", "prg"."prg" AS "prg", "prg"."prgnum" AS "prgnum", "prg"."prgdt" AS "prgdt", "prg"."med_org_id" AS "medorg", "prg"."medorgexecutorid" AS "medorgexecutorid" FROM "prg0" AS "prg" JOIN "prg_okr" ON ("prg_okr"."id" = "prg"."okr_id") JOIN "prg_reg" ON ("prg_reg"."id" = "prg"."nreg") JOIN "prg_oiv" ON ("prg_oiv"."id" = "prg"."oivid") WHERE "prg"."mseid" != '0' ORDER BY "prg"."prgdt" DESC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-20 10:02:39 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg"."i...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(299): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(71): Model_Ipra::GetPersons('0', '0', NULL, NULL)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpupersonlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-20 10:02:50 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column prg.medorgexecutorid does not exist
LINE 1: ...rgdt" AS "prgdt", "prg"."med_org_id" AS "medorg", "prg"."med...
                                                             ^ [ SELECT "prg"."id" AS "id", "prg_okr"."name" AS "okrug", "prg_reg"."name" AS "region", "prg"."nreg" AS "nreg", "prg"."dt" AS "dt", "prg"."snils" AS "snils", "prg"."mseid" AS "mseid", "prg"."lname" AS "lname", "prg"."fname" AS "fname", "prg"."sname" AS "sname", "prg"."bdate" AS "bdate", "prg"."gndr" AS "gndr", "prg_oiv"."name" AS "org_isp_vlast", "prg"."docnum" AS "docnum", "prg"."docdt" AS "docdt", "prg"."prg" AS "prg", "prg"."prgnum" AS "prgnum", "prg"."prgdt" AS "prgdt", "prg"."med_org_id" AS "medorg", "prg"."medorgexecutorid" AS "medorgexecutorid" FROM "prg0" AS "prg" JOIN "prg_okr" ON ("prg_okr"."id" = "prg"."okr_id") JOIN "prg_reg" ON ("prg_reg"."id" = "prg"."nreg") JOIN "prg_oiv" ON ("prg_oiv"."id" = "prg"."oivid") WHERE "prg"."mseid" != '0' ORDER BY "prg"."prgdt" DESC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-20 10:02:50 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg"."i...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(299): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(71): Model_Ipra::GetPersons('0', '0', NULL, NULL)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpupersonlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-20 10:03:37 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column prg.medorgexecutorid does not exist
LINE 1: ...rgdt" AS "prgdt", "prg"."med_org_id" AS "medorg", "prg"."med...
                                                             ^ [ SELECT "prg"."id" AS "id", "prg_okr"."name" AS "okrug", "prg_reg"."name" AS "region", "prg"."nreg" AS "nreg", "prg"."dt" AS "dt", "prg"."snils" AS "snils", "prg"."mseid" AS "mseid", "prg"."lname" AS "lname", "prg"."fname" AS "fname", "prg"."sname" AS "sname", "prg"."bdate" AS "bdate", "prg"."gndr" AS "gndr", "prg_oiv"."name" AS "org_isp_vlast", "prg"."docnum" AS "docnum", "prg"."docdt" AS "docdt", "prg"."prg" AS "prg", "prg"."prgnum" AS "prgnum", "prg"."prgdt" AS "prgdt", "prg"."med_org_id" AS "medorg", "prg"."medorgexecutorid" AS "medorgexecutorid" FROM "prg0" AS "prg" JOIN "prg_okr" ON ("prg_okr"."id" = "prg"."okr_id") JOIN "prg_reg" ON ("prg_reg"."id" = "prg"."nreg") JOIN "prg_oiv" ON ("prg_oiv"."id" = "prg"."oivid") WHERE "prg"."mseid" != '0' ORDER BY "prg"."prgdt" DESC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-20 10:03:37 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg"."i...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(299): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(71): Model_Ipra::GetPersons('0', '0', NULL, NULL)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpupersonlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-20 10:06:28 --- EMERGENCY: Database_Exception [ 23502 ]: SQLSTATE[23502]: Not null violation: 7 ERROR:  null value in column "user_id" violates not-null constraint
DETAIL:  Failing row contains (3543662, null, 2016-10-20 10:06:28.055604, USER_LOGOUT, null, {"client_ip":"10.36.208.49","user_agent":"Mozilla\/5.0 (X11; Lin...). [ INSERT INTO "sys_log" ("user_id", "type", "table_name", "data") VALUES (NULL, 'USER_LOGOUT', NULL, '{"client_ip":"10.36.208.49","user_agent":"Mozilla\/5.0 (X11; Linux x86_64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/53.0.2785.143 Safari\/537.36"}') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-20 10:06:28 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "sy...', false, Array)
#1 /var/www/ipra/application/classes/Model/Syslog.php(79): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Users.php(32): Model_Syslog::UserLogout(NULL)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Users->action_logout()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-20 10:12:57 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 293 ] in /var/www/ipra/application/classes/Controller/Ajax.php:293
2016-10-20 10:12:57 --- DEBUG: #0 /var/www/ipra/application/classes/Controller/Ajax.php(293): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/ipra/a...', 293, Array)
#1 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statiprareadylist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ipra/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/ipra/application/classes/Controller/Ajax.php:293
2016-10-20 10:24:02 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 293 ] in /var/www/ipra/application/classes/Controller/Ajax.php:293
2016-10-20 10:24:02 --- DEBUG: #0 /var/www/ipra/application/classes/Controller/Ajax.php(293): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/ipra/a...', 293, Array)
#1 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statiprareadylist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ipra/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/ipra/application/classes/Controller/Ajax.php:293
2016-10-20 10:24:18 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 293 ] in /var/www/ipra/application/classes/Controller/Ajax.php:293
2016-10-20 10:24:18 --- DEBUG: #0 /var/www/ipra/application/classes/Controller/Ajax.php(293): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/ipra/a...', 293, Array)
#1 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statiprareadylist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ipra/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/ipra/application/classes/Controller/Ajax.php:293
2016-10-20 10:26:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: restxt ~ APPPATH/classes/Model/Ipra.php [ 662 ] in /var/www/ipra/application/classes/Model/Ipra.php:662
2016-10-20 10:26:21 --- DEBUG: #0 /var/www/ipra/application/classes/Model/Ipra.php(662): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ipra/a...', 662, Array)
#1 /var/www/ipra/application/classes/Controller/Ajax.php(289): Model_Ipra::GetIpraReady('0', '0', NULL)
#2 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statiprareadylist()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/ipra/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/ipra/application/classes/Model/Ipra.php:662
2016-10-20 11:39:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Model/Ipra.php [ 641 ] in file:line
2016-10-20 11:39:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-20 11:55:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/classes/Controller/Ajax.php [ 307 ] in file:line
2016-10-20 11:55:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-20 16:19:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: prgcomplete ~ APPPATH/classes/Controller/Ajax.php [ 485 ] in /var/www/ipra/application/classes/Controller/Ajax.php:485
2016-10-20 16:19:31 --- DEBUG: #0 /var/www/ipra/application/classes/Controller/Ajax.php(485): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ipra/a...', 485, Array)
#1 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorgcount()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ipra/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/ipra/application/classes/Controller/Ajax.php:485
2016-10-20 16:19:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: prgcomplete ~ APPPATH/classes/Controller/Ajax.php [ 485 ] in /var/www/ipra/application/classes/Controller/Ajax.php:485
2016-10-20 16:19:37 --- DEBUG: #0 /var/www/ipra/application/classes/Controller/Ajax.php(485): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ipra/a...', 485, Array)
#1 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorgcount()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ipra/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/ipra/application/classes/Controller/Ajax.php:485
2016-10-20 16:19:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: prgcomplete ~ APPPATH/classes/Controller/Ajax.php [ 485 ] in /var/www/ipra/application/classes/Controller/Ajax.php:485
2016-10-20 16:19:44 --- DEBUG: #0 /var/www/ipra/application/classes/Controller/Ajax.php(485): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ipra/a...', 485, Array)
#1 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorgcount()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ipra/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/ipra/application/classes/Controller/Ajax.php:485
2016-10-20 16:19:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: prgcomplete ~ APPPATH/classes/Controller/Ajax.php [ 485 ] in /var/www/ipra/application/classes/Controller/Ajax.php:485
2016-10-20 16:19:59 --- DEBUG: #0 /var/www/ipra/application/classes/Controller/Ajax.php(485): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ipra/a...', 485, Array)
#1 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorgcount()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ipra/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/ipra/application/classes/Controller/Ajax.php:485
2016-10-20 16:25:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: prgcomplete ~ APPPATH/classes/Controller/Ajax.php [ 485 ] in /var/www/ipra/application/classes/Controller/Ajax.php:485
2016-10-20 16:25:45 --- DEBUG: #0 /var/www/ipra/application/classes/Controller/Ajax.php(485): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ipra/a...', 485, Array)
#1 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorgcount()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ipra/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/ipra/application/classes/Controller/Ajax.php:485
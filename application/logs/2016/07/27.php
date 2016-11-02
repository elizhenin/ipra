<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-27 01:11:16 --- EMERGENCY: Database_Exception [ 23502 ]: SQLSTATE[23502]: Not null violation: 7 ERROR:  null value in column "typeid" violates not-null constraint
DETAIL:  Failing row contains (1, 2736, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 2016-07-27 01:11:16.047361+03). [ INSERT INTO "prg_rhb" ("prgid") VALUES (2736) ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 01:11:16 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "pr...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(118): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(16): Model_Ipra::InsertXML('77u/PD94bWwgdmV...')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_xmlupload()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 01:16:29 --- EMERGENCY: Database_Exception [ 23502 ]: SQLSTATE[23502]: Not null violation: 7 ERROR:  null value in column "typeid" violates not-null constraint
DETAIL:  Failing row contains (2, 2736, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 2016-07-27 01:16:29.253385+03). [ INSERT INTO "prg_rhb" ("prgid") VALUES (2736) ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 01:16:29 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "pr...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(121): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(16): Model_Ipra::InsertXML('77u/PD94bWwgdmV...')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_xmlupload()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 01:19:22 --- EMERGENCY: Database_Exception [ 23502 ]: SQLSTATE[23502]: Not null violation: 7 ERROR:  null value in column "typeid" violates not-null constraint
DETAIL:  Failing row contains (3, 2736, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 2016-07-27 01:19:22.260437+03). [ INSERT INTO "prg_rhb" ("prgid") VALUES (2736) ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 01:19:22 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "pr...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(121): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(16): Model_Ipra::InsertXML('77u/PD94bWwgdmV...')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_xmlupload()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 01:40:10 --- EMERGENCY: ErrorException [ 2 ]: filetype(): Lstat failed for uploads. ~ APPPATH/classes/Controller/Tmp.php [ 49 ] in file:line
2016-07-27 01:40:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'filetype(): Lst...', '/var/www/msexml...', 49, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Controller/Tmp.php(49): filetype('uploads.')
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(87): Controller_Tmp->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-07-27 01:45:09 --- EMERGENCY: ErrorException [ 2 ]: filetype(): Lstat failed for uploads0A0A434C-66BE-4776-A396-433C012987CD.xml ~ APPPATH/classes/Controller/Tmp.php [ 50 ] in file:line
2016-07-27 01:45:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'filetype(): Lst...', '/var/www/msexml...', 50, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Controller/Tmp.php(50): filetype('uploads0A0A434C...')
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(87): Controller_Tmp->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-07-27 02:54:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: mseid ~ APPPATH/classes/Model/Ipra.php [ 69 ] in /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php:69
2016-07-27 02:54:40 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(69): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/msexml...', 69, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Controller/Tmp.php(63): Model_Ipra::InsertXML('\xEF\xBB\xBF<?xml versio...')
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(87): Controller_Tmp->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php:69
2016-07-27 03:00:34 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH/classes/Model/Ipra.php [ 11 ] in file:line
2016-07-27 03:00:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-27 03:15:29 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 0 seconds exceeded ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 146 ] in file:line
2016-07-27 03:15:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-27 03:29:16 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 0 seconds exceeded ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 146 ] in file:line
2016-07-27 03:29:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-27 06:13:52 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/Kohana/Controller/Template.php [ 44 ] in file:line
2016-07-27 06:13:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-27 07:14:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: fame ~ APPPATH/classes/Controller/Ajax.php [ 34 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:34
2016-07-27 07:14:38 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(34): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/msexml...', 34, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:34
2016-07-27 07:16:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: fame ~ APPPATH/classes/Controller/Ajax.php [ 34 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:34
2016-07-27 07:16:03 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(34): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/msexml...', 34, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:34
2016-07-27 07:17:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: fame ~ APPPATH/classes/Controller/Ajax.php [ 34 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:34
2016-07-27 07:17:02 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(34): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/msexml...', 34, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:34
2016-07-27 07:46:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: date ~ APPPATH/classes/Controller/Ajax.php [ 44 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:44
2016-07-27 07:46:55 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(44): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/msexml...', 44, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:44
2016-07-27 07:47:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: date ~ APPPATH/classes/Controller/Ajax.php [ 44 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:44
2016-07-27 07:47:42 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(44): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/msexml...', 44, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:44
2016-07-27 07:49:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: date ~ APPPATH/classes/Controller/Ajax.php [ 44 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:44
2016-07-27 07:49:03 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(44): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/msexml...', 44, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:44
2016-07-27 07:49:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: date ~ APPPATH/classes/Controller/Ajax.php [ 44 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:44
2016-07-27 07:49:30 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(44): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/msexml...', 44, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:44
2016-07-27 07:50:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: date ~ APPPATH/classes/Controller/Ajax.php [ 44 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:44
2016-07-27 07:50:32 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(44): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/msexml...', 44, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:44
2016-07-27 07:51:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: date ~ APPPATH/classes/Controller/Ajax.php [ 44 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:44
2016-07-27 07:51:37 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(44): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/msexml...', 44, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:44
2016-07-27 08:34:03 --- EMERGENCY: Database_Exception [ 42P01 ]: SQLSTATE[42P01]: Undefined table: 7 ERROR:  relation "reg" does not exist
LINE 1: ...rg_okr" ON ("prg_okr"."id" = "prg"."okr_id") JOIN "reg" ON (...
                                                             ^ [ SELECT "prg"."id" AS "id", "prg_okr"."name" AS "okrug", "reg"."name" AS "region", "prg"."nreg" AS "nreg", "prg"."dt" AS "dt", "prg"."snils" AS "snils", "prg"."lname" AS "lname", "prg"."fname" AS "fname", "prg"."sname" AS "sname", "prg"."bdate" AS "bdate", "prg"."gndr" AS "gndr", "prg_oiv"."name" AS "org_isp_vlast", "prg"."docnum" AS "docnum", "prg"."docdt" AS "docdt", "prg"."prg" AS "prg", "prg"."prgnum" AS "prgnum", "prg"."prgdt" AS "prgdt" FROM "prg" JOIN "prg_okr" ON ("prg_okr"."id" = "prg"."okr_id") JOIN "reg" ON ("reg"."id" = "org"."nreg") JOIN "prg_oiv" ON ("prg_oiv"."id" = "prg"."oivid") LIMIT 100 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 08:34:03 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg"."i...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(189): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(50): Model_Ipra::GetPersons('100', '0')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 08:34:20 --- EMERGENCY: Database_Exception [ 42P01 ]: SQLSTATE[42P01]: Undefined table: 7 ERROR:  relation "reg" does not exist
LINE 1: ...rg_okr" ON ("prg_okr"."id" = "prg"."okr_id") JOIN "reg" ON (...
                                                             ^ [ SELECT "prg"."id" AS "id", "prg_okr"."name" AS "okrug", "reg"."name" AS "region", "prg"."nreg" AS "nreg", "prg"."dt" AS "dt", "prg"."snils" AS "snils", "prg"."lname" AS "lname", "prg"."fname" AS "fname", "prg"."sname" AS "sname", "prg"."bdate" AS "bdate", "prg"."gndr" AS "gndr", "prg_oiv"."name" AS "org_isp_vlast", "prg"."docnum" AS "docnum", "prg"."docdt" AS "docdt", "prg"."prg" AS "prg", "prg"."prgnum" AS "prgnum", "prg"."prgdt" AS "prgdt" FROM "prg" JOIN "prg_okr" ON ("prg_okr"."id" = "prg"."okr_id") JOIN "reg" ON ("reg"."id" = "org"."nreg") JOIN "prg_oiv" ON ("prg_oiv"."id" = "prg"."oivid") LIMIT 100 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 08:34:20 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg"."i...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(189): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(50): Model_Ipra::GetPersons('100', '0')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 08:35:10 --- EMERGENCY: Database_Exception [ 42P01 ]: SQLSTATE[42P01]: Undefined table: 7 ERROR:  missing FROM-clause entry for table "org"
LINE 1: ...rg"."okr_id") JOIN "prg_reg" ON ("prg_reg"."id" = "org"."nre...
                                                             ^ [ SELECT "prg"."id" AS "id", "prg_okr"."name" AS "okrug", "prg_reg"."name" AS "region", "prg"."nreg" AS "nreg", "prg"."dt" AS "dt", "prg"."snils" AS "snils", "prg"."lname" AS "lname", "prg"."fname" AS "fname", "prg"."sname" AS "sname", "prg"."bdate" AS "bdate", "prg"."gndr" AS "gndr", "prg_oiv"."name" AS "org_isp_vlast", "prg"."docnum" AS "docnum", "prg"."docdt" AS "docdt", "prg"."prg" AS "prg", "prg"."prgnum" AS "prgnum", "prg"."prgdt" AS "prgdt" FROM "prg" JOIN "prg_okr" ON ("prg_okr"."id" = "prg"."okr_id") JOIN "prg_reg" ON ("prg_reg"."id" = "org"."nreg") JOIN "prg_oiv" ON ("prg_oiv"."id" = "prg"."oivid") LIMIT 100 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 08:35:10 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg"."i...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(189): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(50): Model_Ipra::GetPersons('100', '0')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 08:39:05 --- EMERGENCY: Database_Exception [ 42712 ]: SQLSTATE[42712]: Duplicate alias: 7 ERROR:  table name "prg_okr" specified more than once [ SELECT "prg"."id" AS "id", "prg_okr"."name" AS "okrug", "prg_reg"."name" AS "region", "prg"."nreg" AS "nreg", "prg"."dt" AS "dt", "prg"."snils" AS "snils", "prg"."lname" AS "lname", "prg"."fname" AS "fname", "prg"."sname" AS "sname", "prg"."bdate" AS "bdate", "prg"."gndr" AS "gndr", "prg_oiv"."name" AS "org_isp_vlast", "prg"."docnum" AS "docnum", "prg"."docdt" AS "docdt", "prg"."prg" AS "prg", "prg"."prgnum" AS "prgnum", "prg"."prgdt" AS "prgdt" FROM "prg" AS "prg_okr" JOIN "prg_okr" ON ("prg_okr"."id" = "prg"."okr_id") JOIN "prg_reg" ON ("prg_reg"."id" = "org"."nreg") JOIN "prg_oiv" ON ("prg_oiv"."id" = "prg"."oivid") LIMIT 100 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 08:39:05 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg"."i...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(189): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(50): Model_Ipra::GetPersons('100', '0')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 08:40:55 --- EMERGENCY: Database_Exception [ 42P01 ]: SQLSTATE[42P01]: Undefined table: 7 ERROR:  invalid reference to FROM-clause entry for table "prg"
LINE 1: ...g", "prg_oiv" JOIN "prg_okr" ON ("prg_okr"."id" = "prg"."okr...
                                                             ^
HINT:  There is an entry for table "prg", but it cannot be referenced from this part of the query. [ SELECT "prg"."id" AS "id", "prg_okr"."name" AS "okrug", "prg_reg"."name" AS "region", "prg"."nreg" AS "nreg", "prg"."dt" AS "dt", "prg"."snils" AS "snils", "prg"."lname" AS "lname", "prg"."fname" AS "fname", "prg"."sname" AS "sname", "prg"."bdate" AS "bdate", "prg"."gndr" AS "gndr", "prg_oiv"."name" AS "org_isp_vlast", "prg"."docnum" AS "docnum", "prg"."docdt" AS "docdt", "prg"."prg" AS "prg", "prg"."prgnum" AS "prgnum", "prg"."prgdt" AS "prgdt" FROM "prg", "prg_okr", "prg_reg", "prg_oiv" JOIN "prg_okr" ON ("prg_okr"."id" = "prg"."okr_id") JOIN "prg_reg" ON ("prg_reg"."id" = "org"."nreg") JOIN "prg_oiv" ON ("prg_oiv"."id" = "prg"."oivid") LIMIT 100 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 08:40:55 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg"."i...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(189): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(50): Model_Ipra::GetPersons('100', '0')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 08:45:33 --- EMERGENCY: Database_Exception [ 42P01 ]: SQLSTATE[42P01]: Undefined table: 7 ERROR:  missing FROM-clause entry for table "org"
LINE 1: ...rg"."okr_id") JOIN "prg_reg" ON ("prg_reg"."id" = "org"."nre...
                                                             ^ [ SELECT "prg"."id" AS "id", "prg_okr"."name" AS "okrug", "prg_reg"."name" AS "region", "prg"."nreg" AS "nreg", "prg"."dt" AS "dt", "prg"."snils" AS "snils", "prg"."lname" AS "lname", "prg"."fname" AS "fname", "prg"."sname" AS "sname", "prg"."bdate" AS "bdate", "prg"."gndr" AS "gndr", "prg_oiv"."name" AS "org_isp_vlast", "prg"."docnum" AS "docnum", "prg"."docdt" AS "docdt", "prg"."prg" AS "prg", "prg"."prgnum" AS "prgnum", "prg"."prgdt" AS "prgdt" FROM "prg" JOIN "prg_okr" ON ("prg_okr"."id" = "prg"."okr_id") JOIN "prg_reg" ON ("prg_reg"."id" = "org"."nreg") JOIN "prg_oiv" ON ("prg_oiv"."id" = "prg"."oivid") LIMIT 100 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 08:45:33 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg"."i...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(189): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(50): Model_Ipra::GetPersons('100', '0')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 09:00:09 --- EMERGENCY: Database_Exception [ 42601 ]: SQLSTATE[42601]: Syntax error: 7 ERROR:  zero-length delimited identifier at or near """"
LINE 1: ...rg"."prgdt" AS "prgdt" FROM "prg", "prg_okr" JOIN "" ON ("pr...
                                                             ^ [ SELECT "prg"."id" AS "id", "prg_okr"."name" AS "okrug", "prg_reg"."name" AS "region", "prg"."nreg" AS "nreg", "prg"."dt" AS "dt", "prg"."snils" AS "snils", "prg"."lname" AS "lname", "prg"."fname" AS "fname", "prg"."sname" AS "sname", "prg"."bdate" AS "bdate", "prg"."gndr" AS "gndr", "prg_oiv"."name" AS "org_isp_vlast", "prg"."docnum" AS "docnum", "prg"."docdt" AS "docdt", "prg"."prg" AS "prg", "prg"."prgnum" AS "prgnum", "prg"."prgdt" AS "prgdt" FROM "prg", "prg_okr" JOIN "" ON ("prg_okr"."id" = "prg"."okr_id") JOIN "prg_reg" ON ("prg_reg"."id" = "org"."nreg") JOIN "prg_oiv" ON ("prg_oiv"."id" = "prg"."oivid") LIMIT 100 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 09:00:09 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg"."i...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(190): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(50): Model_Ipra::GetPersons('100', '0')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 09:00:46 --- EMERGENCY: Database_Exception [ 42P01 ]: SQLSTATE[42P01]: Undefined table: 7 ERROR:  missing FROM-clause entry for table "org"
LINE 1: ...rg"."okr_id") JOIN "prg_reg" ON ("prg_reg"."id" = "org"."nre...
                                                             ^ [ SELECT "prg"."id" AS "id", "prg_okr"."name" AS "okrug", "prg_reg"."name" AS "region", "prg"."nreg" AS "nreg", "prg"."dt" AS "dt", "prg"."snils" AS "snils", "prg"."lname" AS "lname", "prg"."fname" AS "fname", "prg"."sname" AS "sname", "prg"."bdate" AS "bdate", "prg"."gndr" AS "gndr", "prg_oiv"."name" AS "org_isp_vlast", "prg"."docnum" AS "docnum", "prg"."docdt" AS "docdt", "prg"."prg" AS "prg", "prg"."prgnum" AS "prgnum", "prg"."prgdt" AS "prgdt" FROM "prg" JOIN "prg_okr" ON ("prg_okr"."id" = "prg"."okr_id") JOIN "prg_reg" ON ("prg_reg"."id" = "org"."nreg") JOIN "prg_oiv" ON ("prg_oiv"."id" = "prg"."oivid") LIMIT 100 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 09:00:46 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg"."i...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(189): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(50): Model_Ipra::GetPersons('100', '0')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 09:01:47 --- EMERGENCY: Database_Exception [ 42P01 ]: SQLSTATE[42P01]: Undefined table: 7 ERROR:  missing FROM-clause entry for table "org"
LINE 1: ...rg"."okr_id") JOIN "prg_reg" ON ("prg_reg"."id" = "org"."nre...
                                                             ^ [ SELECT "prg"."id" AS "id", "prg_okr"."name" AS "okrug", "prg_reg"."name" AS "region", "prg"."nreg" AS "nreg", "prg"."dt" AS "dt", "prg"."snils" AS "snils", "prg"."lname" AS "lname", "prg"."fname" AS "fname", "prg"."sname" AS "sname", "prg"."bdate" AS "bdate", "prg"."gndr" AS "gndr", "prg_oiv"."name" AS "orgispvlast", "prg"."docnum" AS "docnum", "prg"."docdt" AS "docdt", "prg"."prg" AS "prg", "prg"."prgnum" AS "prgnum", "prg"."prgdt" AS "prgdt" FROM "prg" JOIN "prg_okr" ON ("prg_okr"."id" = "prg"."okr_id") JOIN "prg_reg" ON ("prg_reg"."id" = "org"."nreg") JOIN "prg_oiv" ON ("prg_oiv"."id" = "prg"."oivid") LIMIT 100 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 09:01:47 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg"."i...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(189): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(50): Model_Ipra::GetPersons('100', '0')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 09:17:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: sort ~ APPPATH/classes/Controller/Ajax.php [ 48 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:48
2016-07-27 09:17:02 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(48): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/msexml...', 48, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:48
2016-07-27 09:18:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: sort ~ APPPATH/classes/Controller/Ajax.php [ 48 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:48
2016-07-27 09:18:25 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(48): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/msexml...', 48, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:48
2016-07-27 22:10:14 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Model/Ipra.php [ 192 ] in /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php:192
2016-07-27 22:10:14 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(192): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/msexml...', 192, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(51): Model_Ipra::GetPersons('50', '0', NULL, Array)
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php:192
2016-07-27 22:11:25 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Model/Ipra.php [ 192 ] in /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php:192
2016-07-27 22:11:25 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(192): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/msexml...', 192, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(51): Model_Ipra::GetPersons('50', '0', NULL, Array)
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php:192
2016-07-27 22:12:55 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Model/Ipra.php [ 192 ] in /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php:192
2016-07-27 22:12:55 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(192): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/msexml...', 192, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(51): Model_Ipra::GetPersons('50', '0', NULL, Array)
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php:192
2016-07-27 22:13:27 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Model/Ipra.php [ 192 ] in /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php:192
2016-07-27 22:13:27 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(192): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/msexml...', 192, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(51): Model_Ipra::GetPersons('50', '0', NULL, Array)
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php:192
2016-07-27 22:13:45 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Model/Ipra.php [ 192 ] in /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php:192
2016-07-27 22:13:45 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(192): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/msexml...', 192, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(51): Model_Ipra::GetPersons('50', '0', NULL, Array)
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php:192
2016-07-27 22:14:23 --- EMERGENCY: Database_Exception [ 22007 ]: SQLSTATE[22007]: Invalid datetime format: 7 ERROR:  invalid input syntax for type date: "ко"
LINE 1: ... ("prg_oiv"."id" = "prg"."oivid") WHERE "prgdt" = 'ко' AND "...
                                                             ^ [ SELECT "prg"."id" AS "id", "prg_okr"."name" AS "okrug", "prg_reg"."name" AS "region", "prg"."nreg" AS "nreg", "prg"."dt" AS "dt", "prg"."snils" AS "snils", "prg"."lname" AS "lname", "prg"."fname" AS "fname", "prg"."sname" AS "sname", "prg"."bdate" AS "bdate", "prg"."gndr" AS "gndr", "prg_oiv"."name" AS "org_isp_vlast", "prg"."docnum" AS "docnum", "prg"."docdt" AS "docdt", "prg"."prg" AS "prg", "prg"."prgnum" AS "prgnum", "prg"."prgdt" AS "prgdt" FROM "prg" JOIN "prg_okr" ON ("prg_okr"."id" = "prg"."okr_id") JOIN "prg_reg" ON ("prg_reg"."id" = "prg"."nreg") JOIN "prg_oiv" ON ("prg_oiv"."id" = "prg"."oivid") WHERE "prgdt" = 'ко' AND "lname" = 'ко' AND "fname" = 'ко' AND "sname" = 'ко' AND "prgnum" = 'ко' AND "snils" = 'ко' LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 22:14:23 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg"."i...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(199): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(51): Model_Ipra::GetPersons('50', '0', NULL, Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 22:19:38 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:19:38 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:20:19 --- EMERGENCY: Database_Exception [ 42601 ]: SQLSTATE[42601]: Syntax error: 7 ERROR:  syntax error at or near "%"
LINE 1: ...prg_oiv"."id" = "prg"."oivid") WHERE "lname" %LIKE% 'ко' AND...
                                                             ^ [ SELECT "prg"."id" AS "id", "prg_okr"."name" AS "okrug", "prg_reg"."name" AS "region", "prg"."nreg" AS "nreg", "prg"."dt" AS "dt", "prg"."snils" AS "snils", "prg"."lname" AS "lname", "prg"."fname" AS "fname", "prg"."sname" AS "sname", "prg"."bdate" AS "bdate", "prg"."gndr" AS "gndr", "prg_oiv"."name" AS "org_isp_vlast", "prg"."docnum" AS "docnum", "prg"."docdt" AS "docdt", "prg"."prg" AS "prg", "prg"."prgnum" AS "prgnum", "prg"."prgdt" AS "prgdt" FROM "prg" JOIN "prg_okr" ON ("prg_okr"."id" = "prg"."okr_id") JOIN "prg_reg" ON ("prg_reg"."id" = "prg"."nreg") JOIN "prg_oiv" ON ("prg_oiv"."id" = "prg"."oivid") WHERE "lname" %LIKE% 'ко' AND "fname" %LIKE% 'ко' AND "sname" %LIKE% 'ко' AND "prgnum" %LIKE% 'ко' AND "snils" %LIKE% 'ко' LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 22:20:19 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg"."i...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(206): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(51): Model_Ipra::GetPersons('50', '0', NULL, Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 22:21:49 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:21:49 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:23:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Model/Ipra.php [ 199 ] in file:line
2016-07-27 22:23:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-27 22:24:06 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:06 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:48 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:48 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:48 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:48 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:48 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:48 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:48 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:48 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:48 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:48 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:49 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:49 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:49 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:49 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:49 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:49 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:49 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:49 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:49 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:49 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:49 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:49 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:50 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:50 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:50 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:50 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:50 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:50 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:50 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:50 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:50 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:50 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:50 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:50 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:51 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:51 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:51 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:51 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:51 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:51 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:51 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:51 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:51 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:51 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:52 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:52 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:52 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:52 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:52 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:52 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:52 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:52 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:52 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:52 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:52 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:52 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:53 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:53 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:53 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:53 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:53 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:53 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:53 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:53 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:53 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:53 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:54 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:54 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:54 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:54 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:54 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:54 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:54 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:54 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:54 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:54 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:54 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:54 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:55 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:55 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:55 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:55 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:55 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:55 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:55 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:55 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:55 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:55 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:56 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:56 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:56 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:56 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:56 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:56 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:56 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:56 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:56 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:56 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:56 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:56 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:57 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:57 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:57 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:57 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:57 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:57 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:57 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:57 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:57 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:57 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:58 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:58 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:58 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:58 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:58 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:58 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:58 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:58 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:58 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:58 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:58 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:58 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:59 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:59 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:59 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:59 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:59 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:59 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:59 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:59 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:59 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:24:59 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:00 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:00 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:00 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:00 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:00 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:00 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:00 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:00 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:00 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:00 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:00 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:00 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:01 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:01 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:01 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:01 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:01 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:01 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:01 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:01 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:01 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:01 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:02 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:02 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:02 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:02 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:02 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:02 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:02 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:02 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:02 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:02 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:02 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:02 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:03 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:03 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:03 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:03 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:03 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:03 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:03 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:03 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:03 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:03 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:04 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:04 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:04 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:04 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:04 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:04 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:04 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:04 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:04 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:04 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:04 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:04 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:05 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:05 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:05 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:05 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:05 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:05 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:05 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:05 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:05 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:05 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:06 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:06 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:06 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:06 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:06 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:06 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:06 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:06 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:06 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:06 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:07 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:07 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:07 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:07 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:07 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:07 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:07 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:07 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:07 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:07 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:07 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:07 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:08 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:08 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:08 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:08 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:08 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:08 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:08 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:08 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:08 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:08 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:09 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:09 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:09 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:09 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:09 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:09 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:09 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:09 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:09 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:09 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:09 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:09 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:10 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:10 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:10 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:10 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:10 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:10 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:10 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:10 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:10 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:10 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:11 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:11 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:11 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:11 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:11 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:11 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:11 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:11 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:11 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:11 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:11 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:11 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:12 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:12 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:12 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:12 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:12 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:12 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:12 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:12 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:12 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 54 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:12 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(54): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 54, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:54
2016-07-27 22:25:42 --- EMERGENCY: Database_Exception [ 42883 ]: SQLSTATE[42883]: Undefined function: 7 ERROR:  operator does not exist: date ~~ unknown
LINE 1: ...ON ("prg_oiv"."id" = "prg"."oivid") WHERE "prgdt" LIKE '%ко%...
                                                             ^
HINT:  No operator matches the given name and argument type(s). You might need to add explicit type casts. [ SELECT "prg"."id" AS "id", "prg_okr"."name" AS "okrug", "prg_reg"."name" AS "region", "prg"."nreg" AS "nreg", "prg"."dt" AS "dt", "prg"."snils" AS "snils", "prg"."lname" AS "lname", "prg"."fname" AS "fname", "prg"."sname" AS "sname", "prg"."bdate" AS "bdate", "prg"."gndr" AS "gndr", "prg_oiv"."name" AS "org_isp_vlast", "prg"."docnum" AS "docnum", "prg"."docdt" AS "docdt", "prg"."prg" AS "prg", "prg"."prgnum" AS "prgnum", "prg"."prgdt" AS "prgdt" FROM "prg" JOIN "prg_okr" ON ("prg_okr"."id" = "prg"."okr_id") JOIN "prg_reg" ON ("prg_reg"."id" = "prg"."nreg") JOIN "prg_oiv" ON ("prg_oiv"."id" = "prg"."oivid") WHERE "prgdt" LIKE '%ко%' OR "lname" LIKE '%ко%' OR "fname" LIKE '%ко%' OR "sname" LIKE '%ко%' OR "prgnum" LIKE '%ко%' OR "snils" LIKE '%ко%' LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-27 22:25:42 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg"."i...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(206): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(51): Model_Ipra::GetPersons('50', '0', NULL, Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpushortlistipra()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
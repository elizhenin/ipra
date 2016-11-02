<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-28 00:46:52 --- EMERGENCY: Database_Exception [ 42P01 ]: SQLSTATE[42P01]: Undefined table: 7 ERROR:  relation "prg_type" does not exist
LINE 1: ..., "prg_type"."name" AS "type" FROM "prg_rhb" JOIN "prg_type"...
                                                             ^ [ SELECT "prg_rhb"."id" AS "id", "prg_type"."name" AS "type" FROM "prg_rhb" JOIN "prg_type" ON ("prg_type"."id" = "prg_rhb"."typeid") WHERE "prg_rhb"."prgid" = 11415 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-28 00:46:52 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg_rhb...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(234): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(62): Model_Ipra::GetPersonsIpra(11415)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpupersonlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-28 00:47:06 --- EMERGENCY: Database_Exception [ 42P01 ]: SQLSTATE[42P01]: Undefined table: 7 ERROR:  relation "prg_type" does not exist
LINE 1: ..., "prg_type"."name" AS "type" FROM "prg_rhb" JOIN "prg_type"...
                                                             ^ [ SELECT "prg_rhb"."id" AS "id", "prg_type"."name" AS "type" FROM "prg_rhb" JOIN "prg_type" ON ("prg_type"."id" = "prg_rhb"."typeid") WHERE "prg_rhb"."prgid" = 11415 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-28 00:47:06 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg_rhb...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(234): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(62): Model_Ipra::GetPersonsIpra(11415)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpupersonlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-28 00:47:37 --- EMERGENCY: Database_Exception [ 42P01 ]: SQLSTATE[42P01]: Undefined table: 7 ERROR:  relation "prg_type" does not exist
LINE 1: ..., "prg_type"."name" AS "type" FROM "prg_rhb" JOIN "prg_type"...
                                                             ^ [ SELECT "prg_rhb"."id" AS "id", "prg_type"."name" AS "type" FROM "prg_rhb" JOIN "prg_type" ON ("prg_type"."id" = "prg_rhb"."typeid") WHERE "prg_rhb"."prgid" = 11415 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-28 00:47:37 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg_rhb...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(234): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(62): Model_Ipra::GetPersonsIpra(11415)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpupersonlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-28 00:48:13 --- EMERGENCY: Database_Exception [ 42P01 ]: SQLSTATE[42P01]: Undefined table: 7 ERROR:  missing FROM-clause entry for table "rhg_type"
LINE 1: SELECT "prg_rhb"."id" AS "id", "rhg_type"."name" AS "type" F...
                                       ^ [ SELECT "prg_rhb"."id" AS "id", "rhg_type"."name" AS "type" FROM "prg_rhb" JOIN "rhb_type" ON ("rhb_type"."id" = "prg_rhb"."typeid") WHERE "prg_rhb"."prgid" = 11415 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-28 00:48:13 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg_rhb...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(234): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(62): Model_Ipra::GetPersonsIpra(11415)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpupersonlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-28 00:59:10 --- EMERGENCY: Database_Exception [ 42P01 ]: SQLSTATE[42P01]: Undefined table: 7 ERROR:  missing FROM-clause entry for table "res"
LINE 1: ...nt"."id" = "prg_rhb"."evntid") JOIN "rhb_res" ON ("rhb"."res...
                                                             ^ [ SELECT "prg_rhb"."id" AS "recid", "rhb_type"."name" AS "type", "rhb_evnt"."name" AS "event", "prg_rhb"."dt_exc" AS "date", "rhb_res"."shname" AS "result" FROM "prg_rhb" JOIN "rhb_type" ON ("rhb_type"."id" = "prg_rhb"."typeid") LEFT JOIN "rhb_evnt" ON ("rhb_evnt"."id" = "prg_rhb"."evntid") JOIN "rhb_res" ON ("rhb"."res"."id" = "prg_rhb"."resid") WHERE "prg_rhb"."prgid" = 11415 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-28 00:59:10 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg_rhb...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(242): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(62): Model_Ipra::GetPersonsIpra(11415)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpupersonlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-28 00:59:19 --- EMERGENCY: Database_Exception [ 42P01 ]: SQLSTATE[42P01]: Undefined table: 7 ERROR:  missing FROM-clause entry for table "res"
LINE 1: ...nt"."id" = "prg_rhb"."evntid") JOIN "rhb_res" ON ("rhb"."res...
                                                             ^ [ SELECT "prg_rhb"."id" AS "recid", "rhb_type"."name" AS "type", "rhb_evnt"."name" AS "event", "prg_rhb"."dt_exc" AS "date", "rhb_res"."shname" AS "result" FROM "prg_rhb" JOIN "rhb_type" ON ("rhb_type"."id" = "prg_rhb"."typeid") LEFT JOIN "rhb_evnt" ON ("rhb_evnt"."id" = "prg_rhb"."evntid") JOIN "rhb_res" ON ("rhb"."res"."id" = "prg_rhb"."resid") WHERE "prg_rhb"."prgid" = 11415 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-28 00:59:19 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg_rhb...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(242): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(62): Model_Ipra::GetPersonsIpra(11415)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpupersonlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-28 03:20:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: return ~ APPPATH/classes/Controller/Ajax.php [ 86 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:86
2016-07-28 03:20:32 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(86): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/msexml...', 86, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:86
2016-07-28 03:29:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/Controller/Ajax.php [ 83 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:83
2016-07-28 03:29:39 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(83): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/msexml...', 83, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:83
2016-07-28 03:39:15 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/lpuipraeditform.php [ 10 ] in /var/www/msexml.lsbr.ru/application/views/lpuipraeditform.php:10
2016-07-28 03:39:15 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/views/lpuipraeditform.php(10): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/msexml...', 10, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(62): include('/var/www/msexml...')
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/msexml...', Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(74): Kohana_Response->body(Object(View))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditform()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/msexml.lsbr.ru/application/views/lpuipraeditform.php:10
2016-07-28 03:58:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: rhb_exc ~ APPPATH/views/lpuipraeditform.php [ 80 ] in /var/www/msexml.lsbr.ru/application/views/lpuipraeditform.php:80
2016-07-28 03:58:20 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/views/lpuipraeditform.php(80): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/msexml...', 80, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(62): include('/var/www/msexml...')
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/msexml...', Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(77): Kohana_Response->body(Object(View))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditform()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/msexml.lsbr.ru/application/views/lpuipraeditform.php:80
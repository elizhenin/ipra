<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-02 15:29:02 --- EMERGENCY: Database_Exception [ 42P01 ]: SQLSTATE[42P01]: Undefined table: 7 ERROR:  missing FROM-clause entry for table "prg"
LINE 1: ...dt_exc" AS "date", "prg_rhb"."name" AS "ex_name", "prg"."lna...
                                                             ^ [ SELECT "prg_rhb"."id" AS "recid", "prg_rhb"."dt_exc" AS "date", "prg_rhb"."name" AS "ex_name", "prg"."lname" AS "lname", "prg"."fname" AS "fname", "prg"."sname" AS "sname", "prg"."bdate" AS "bdate", "med_org"."name" AS "med_org", "rhb_type"."name" AS "type", "rhb_evnt"."name" AS "event", "rhb_dic"."name" AS "dicid", "rhb_tsr"."name" AS "tsrid", "rhb_res"."name" AS "resid" FROM "prg0_rhb" AS "prg_rhb" LEFT JOIN "rhb_type" ON ("rhb_type"."id" = "prg_rhb"."typeid") LEFT JOIN "rhb_evnt" ON ("rhb_evnt"."id" = "prg_rhb"."evntid") LEFT JOIN "rhb_res" ON ("rhb_res"."id" = "prg_rhb"."resid") LEFT JOIN "rhb_dic" ON ("rhb_dic"."id" = "prg_rhb"."dicid") LEFT JOIN "rhb_tsr" ON ("rhb_tsr"."id" = "prg_rhb"."tsrid") JOIN "prg0" ON ("prg_rhb"."prgid" = "prg0"."id") WHERE "prg_rhb"."resid" != '0' OR "prg_rhb"."result" != '' OFFSET 50 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-02 15:29:02 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg_rhb...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(356): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(163): Model_Ipra::GetIpraReady(NULL, '50', '0')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statiprareadylist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-02 15:29:50 --- EMERGENCY: Database_Exception [ 42P01 ]: SQLSTATE[42P01]: Undefined table: 7 ERROR:  invalid reference to FROM-clause entry for table "prg0"
LINE 1: ...id") JOIN "prg0" AS "prg" ON ("prg_rhb"."prgid" = "prg0"."id...
                                                             ^
HINT:  Perhaps you meant to reference the table alias "prg". [ SELECT "prg_rhb"."id" AS "recid", "prg_rhb"."dt_exc" AS "date", "prg_rhb"."name" AS "ex_name", "prg"."lname" AS "lname", "prg"."fname" AS "fname", "prg"."sname" AS "sname", "prg"."bdate" AS "bdate", "med_org"."name" AS "med_org", "rhb_type"."name" AS "type", "rhb_evnt"."name" AS "event", "rhb_dic"."name" AS "dicid", "rhb_tsr"."name" AS "tsrid", "rhb_res"."name" AS "resid" FROM "prg0_rhb" AS "prg_rhb" LEFT JOIN "rhb_type" ON ("rhb_type"."id" = "prg_rhb"."typeid") LEFT JOIN "rhb_evnt" ON ("rhb_evnt"."id" = "prg_rhb"."evntid") LEFT JOIN "rhb_res" ON ("rhb_res"."id" = "prg_rhb"."resid") LEFT JOIN "rhb_dic" ON ("rhb_dic"."id" = "prg_rhb"."dicid") LEFT JOIN "rhb_tsr" ON ("rhb_tsr"."id" = "prg_rhb"."tsrid") JOIN "prg0" AS "prg" ON ("prg_rhb"."prgid" = "prg0"."id") WHERE "prg_rhb"."resid" != '0' OR "prg_rhb"."result" != '' OFFSET 50 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-02 15:29:50 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg_rhb...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(357): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(163): Model_Ipra::GetIpraReady(NULL, '50', '0')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statiprareadylist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-02 15:30:11 --- EMERGENCY: Database_Exception [ 42P01 ]: SQLSTATE[42P01]: Undefined table: 7 ERROR:  missing FROM-clause entry for table "med_org"
LINE 1: ...rg"."sname" AS "sname", "prg"."bdate" AS "bdate", "med_org"....
                                                             ^ [ SELECT "prg_rhb"."id" AS "recid", "prg_rhb"."dt_exc" AS "date", "prg_rhb"."name" AS "ex_name", "prg"."lname" AS "lname", "prg"."fname" AS "fname", "prg"."sname" AS "sname", "prg"."bdate" AS "bdate", "med_org"."name" AS "med_org", "rhb_type"."name" AS "type", "rhb_evnt"."name" AS "event", "rhb_dic"."name" AS "dicid", "rhb_tsr"."name" AS "tsrid", "rhb_res"."name" AS "resid" FROM "prg0_rhb" AS "prg_rhb" LEFT JOIN "rhb_type" ON ("rhb_type"."id" = "prg_rhb"."typeid") LEFT JOIN "rhb_evnt" ON ("rhb_evnt"."id" = "prg_rhb"."evntid") LEFT JOIN "rhb_res" ON ("rhb_res"."id" = "prg_rhb"."resid") LEFT JOIN "rhb_dic" ON ("rhb_dic"."id" = "prg_rhb"."dicid") LEFT JOIN "rhb_tsr" ON ("rhb_tsr"."id" = "prg_rhb"."tsrid") JOIN "prg0" AS "prg" ON ("prg_rhb"."prgid" = "prg"."id") WHERE "prg_rhb"."resid" != '0' OR "prg_rhb"."result" != '' OFFSET 50 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-02 15:30:11 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg_rhb...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(357): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(163): Model_Ipra::GetIpraReady(NULL, '50', '0')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statiprareadylist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-02 15:31:21 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 167 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:167
2016-08-02 15:31:21 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(167): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 167, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statiprareadylist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:167
2016-08-02 15:35:54 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 167 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:167
2016-08-02 15:35:54 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(167): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 167, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statiprareadylist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:167
2016-08-02 15:56:16 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 167 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:167
2016-08-02 15:56:16 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(167): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 167, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statiprareadylist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:167
2016-08-02 15:57:11 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 167 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:167
2016-08-02 15:57:11 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(167): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 167, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statiprareadylist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:167
2016-08-02 15:57:41 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column "prg_rhb.id" does not exist
LINE 1: SELECT COUNT("prg_rhb.id") AS "count" FROM "prg0_rhb" AS "pr...
                     ^ [ SELECT COUNT("prg_rhb.id") AS "count" FROM "prg0_rhb" AS "prg_rhb" WHERE "prg_rhb"."resid" != '0' OR "prg_rhb"."result" != '' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-02 15:57:41 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT("p...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(371): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(165): Model_Ipra::CountIpraReady()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statiprareadylist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-02 16:00:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: med_org_txt ~ APPPATH/classes/Controller/Ajax.php [ 188 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:188
2016-08-02 16:00:32 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(188): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/msexml...', 188, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statiprareadylist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:188
2016-08-02 16:01:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: restxt ~ APPPATH/classes/Controller/Ajax.php [ 183 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:183
2016-08-02 16:01:09 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(183): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/msexml...', 183, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statiprareadylist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:183
2016-08-02 16:06:14 --- EMERGENCY: Database_Exception [ 42601 ]: SQLSTATE[42601]: Syntax error: 7 ERROR:  syntax error at or near "BOTH"
LINE 1: ...s"."name" AS "resid" FROM "prg0_rhb" AS "prg_rhb" BOTH JOIN ...
                                                             ^ [ SELECT "prg_rhb"."id" AS "recid", "prg_rhb"."dt_exc" AS "date", "prg_rhb"."result" AS "restxt", "prg_rhb"."name" AS "ex_name", "prg"."lname" AS "lname", "prg"."fname" AS "fname", "prg"."sname" AS "sname", "prg"."bdate" AS "bdate", "med_org"."name" AS "med_org", "rhb_type"."name" AS "type", "rhb_evnt"."name" AS "event", "rhb_dic"."name" AS "dicid", "rhb_tsr"."name" AS "tsrid", "rhb_res"."name" AS "resid" FROM "prg0_rhb" AS "prg_rhb" BOTH JOIN "rhb_type" ON ("rhb_type"."id" = "prg_rhb"."typeid") LEFT JOIN "rhb_evnt" ON ("rhb_evnt"."id" = "prg_rhb"."evntid") LEFT JOIN "rhb_res" ON ("rhb_res"."id" = "prg_rhb"."resid") LEFT JOIN "rhb_dic" ON ("rhb_dic"."id" = "prg_rhb"."dicid") LEFT JOIN "rhb_tsr" ON ("rhb_tsr"."id" = "prg_rhb"."tsrid") LEFT JOIN "prg0" AS "prg" ON ("prg_rhb"."prgid" = "prg"."id") LEFT JOIN "med_org" ON ("med_org"."id" = "prg"."med_org_id") WHERE "prg_rhb"."resid" != '0' OR "prg_rhb"."result" != '' LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-02 16:06:14 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg_rhb...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(360): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(163): Model_Ipra::GetIpraReady('50', '0')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statiprareadylist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-02 16:17:13 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column prg_rhb.prgnum does not exist
LINE 1: ...name" AS "ex_name", "prg_rhb"."resid" AS "resid", "prg_rhb"....
                                                             ^ [ SELECT "prg_rhb"."id" AS "recid", "prg_rhb"."dt_exc" AS "date", "prg_rhb"."name" AS "ex_name", "prg_rhb"."resid" AS "resid", "prg_rhb"."prgnum" AS "prgnum", "prg_rhb"."snils" AS "snils", "prg"."lname" AS "lname", "prg"."fname" AS "fname", "prg"."sname" AS "sname", "prg"."bdate" AS "bdate", "med_org"."name" AS "med_org", "rhb_type"."name" AS "type", "rhb_evnt"."name" AS "event", "rhb_dic"."name" AS "dicid", "rhb_tsr"."name" AS "tsrid" FROM "prg0_rhb" AS "prg_rhb" LEFT JOIN "rhb_type" ON ("rhb_type"."id" = "prg_rhb"."typeid") LEFT JOIN "rhb_evnt" ON ("rhb_evnt"."id" = "prg_rhb"."evntid") LEFT JOIN "rhb_dic" ON ("rhb_dic"."id" = "prg_rhb"."dicid") LEFT JOIN "rhb_tsr" ON ("rhb_tsr"."id" = "prg_rhb"."tsrid") RIGHT JOIN "prg0" AS "prg" ON ("prg_rhb"."prgid" = "prg"."id") LEFT JOIN "med_org" ON ("med_org"."id" = "prg"."med_org_id") WHERE "prg_rhb"."resid" != '0' OR "prg_rhb"."result" != '' LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-02 16:17:13 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg_rhb...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(361): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(163): Model_Ipra::GetIpraReady('50', '0')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statiprareadylist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-23 11:49:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: uploadedfile ~ APPPATH/classes/Controller/Stat.php [ 15 ] in /var/www/ipra/application/classes/Controller/Stat.php:15
2016-08-23 11:49:15 --- DEBUG: #0 /var/www/ipra/application/classes/Controller/Stat.php(15): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ipra/a...', 15, Array)
#1 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Stat->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Stat))
#4 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ipra/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/ipra/application/classes/Controller/Stat.php:15
2016-08-23 11:51:31 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: "recid"
LINE 1: ...prg_oiv"."id" = "prg"."oivid") WHERE "prg"."id" = 'recid' LI...
                                                             ^ [ SELECT "prg"."id" AS "id", "prg_okr"."name" AS "okrug", "prg_reg"."name" AS "region", "prg"."nreg" AS "nreg", "prg"."dt" AS "dt", "prg"."snils" AS "snils", "prg"."lname" AS "lname", "prg"."fname" AS "fname", "prg"."sname" AS "sname", "prg"."bdate" AS "bdate", "prg"."gndr" AS "gndr", "prg_oiv"."name" AS "org_isp_vlast", "prg"."docnum" AS "docnum", "prg"."docdt" AS "docdt", "prg"."prg" AS "prg", "prg"."prgnum" AS "prgnum", "prg"."prgdt" AS "prgdt" FROM "prg0" AS "prg" JOIN "prg_okr" ON ("prg_okr"."id" = "prg"."okr_id") JOIN "prg_reg" ON ("prg_reg"."id" = "prg"."nreg") JOIN "prg_oiv" ON ("prg_oiv"."id" = "prg"."oivid") WHERE "prg"."id" = 'recid' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-23 11:51:31 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg"."i...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(280): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Stat.php(22): Model_Ipra::GetOnePerson('recid')
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Stat->action_upload()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Stat))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-23 12:01:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 8 ~ APPPATH/classes/Controller/Stat.php [ 21 ] in /var/www/ipra/application/classes/Controller/Stat.php:21
2016-08-23 12:01:01 --- DEBUG: #0 /var/www/ipra/application/classes/Controller/Stat.php(21): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/ipra/a...', 21, Array)
#1 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Stat->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Stat))
#4 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ipra/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/ipra/application/classes/Controller/Stat.php:21
2016-08-23 14:41:04 --- EMERGENCY: Database_Exception [ 42601 ]: SQLSTATE[42601]: Syntax error: 7 ERROR:  syntax error at or near "''"
LINE 1: ..."."resid" > '0' OR "prg_rhb"."result" IS NOT NULL '') GROUP ...
                                                             ^ [ SELECT "med_org"."dicid" AS "recid", COUNT("prg_rhb"."id") AS "prgcount", "med_org"."name" AS "name" FROM "med_org" RIGHT JOIN "prg0" AS "prg" ON ("med_org"."dicid" = "prg"."med_org_id") RIGHT JOIN "prg0_rhb" AS "prg_rhb" ON ("prg_rhb"."prgid" = "prg"."id") WHERE ("med_org"."parentid" = '0' OR "prg"."med_org_id" = '0') AND ("prg_rhb"."resid" > '0' OR "prg_rhb"."result" IS NOT NULL '') GROUP BY "med_org"."dicid", "med_org"."name" ORDER BY "prgcount" DESC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-23 14:41:04 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "med_org...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(626): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(362): Model_Ipra::GetReadyIpraMedOrgCounted()
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorgcount()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-23 14:41:27 --- EMERGENCY: Database_Exception [ 42601 ]: SQLSTATE[42601]: Syntax error: 7 ERROR:  syntax error at or near "''"
LINE 1: ..."."resid" > '0' OR "prg_rhb"."result" IS NOT NULL '') GROUP ...
                                                             ^ [ SELECT "med_org"."dicid" AS "recid", COUNT("prg_rhb"."id") AS "prgcount", "med_org"."name" AS "name" FROM "med_org" RIGHT JOIN "prg0" AS "prg" ON ("med_org"."dicid" = "prg"."med_org_id") RIGHT JOIN "prg0_rhb" AS "prg_rhb" ON ("prg_rhb"."prgid" = "prg"."id") WHERE ("med_org"."parentid" = '0' OR "prg"."med_org_id" = '0') AND ("prg_rhb"."resid" > '0' OR "prg_rhb"."result" IS NOT NULL '') GROUP BY "med_org"."dicid", "med_org"."name" ORDER BY "prgcount" DESC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-23 14:41:27 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "med_org...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(626): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(362): Model_Ipra::GetReadyIpraMedOrgCounted()
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorgcount()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-23 14:45:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 370 ] in file:line
2016-08-23 14:45:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-23 14:46:55 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column "prgcount" does not exist
LINE 1: ...P BY "med_org"."dicid", "med_org"."name" ORDER BY "prgcount"...
                                                             ^ [ SELECT "med_org"."dicid" AS "recid", COUNT("prg_rhb"."id") AS "prgcomplete", "med_org"."name" AS "name" FROM "med_org" RIGHT JOIN "prg0" AS "prg" ON ("med_org"."dicid" = "prg"."med_org_id") RIGHT JOIN "prg0_rhb" AS "prg_rhb" ON ("prg_rhb"."prgid" = "prg"."id") WHERE ("med_org"."parentid" = '0' OR "prg"."med_org_id" = '0') AND ("prg_rhb"."resid" > '0' OR "prg_rhb"."result" IS NOT NULL) GROUP BY "med_org"."dicid", "med_org"."name" ORDER BY "prgcount" DESC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-23 14:46:55 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "med_org...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(626): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(362): Model_Ipra::GetReadyIpraMedOrgCounted()
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorgcount()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-23 14:49:54 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column "prgcount" does not exist
LINE 1: ...P BY "med_org"."dicid", "med_org"."name" ORDER BY "prgcount"...
                                                             ^ [ SELECT "med_org"."dicid" AS "recid", COUNT("prg_rhb"."id") AS "prgcomplete", "med_org"."name" AS "name" FROM "med_org" RIGHT JOIN "prg0" AS "prg" ON ("med_org"."dicid" = "prg"."med_org_id") RIGHT JOIN "prg0_rhb" AS "prg_rhb" ON ("prg_rhb"."prgid" = "prg"."id") WHERE ("med_org"."parentid" = '0' OR "prg"."med_org_id" = '0') AND ("prg_rhb"."resid" > '0' OR "prg_rhb"."result" IS NOT NULL) GROUP BY "med_org"."dicid", "med_org"."name" ORDER BY "prgcount" DESC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-23 14:49:54 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "med_org...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(626): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(362): Model_Ipra::GetReadyIpraMedOrgCounted()
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorgcount()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-23 14:51:25 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column "prgcount" does not exist
LINE 1: ...P BY "med_org"."dicid", "med_org"."name" ORDER BY "prgcount"...
                                                             ^ [ SELECT "med_org"."dicid" AS "recid", COUNT("prg_rhb"."id") AS "prgcomplete", "med_org"."name" AS "name" FROM "med_org" RIGHT JOIN "prg0" AS "prg" ON ("med_org"."dicid" = "prg"."med_org_id") RIGHT JOIN "prg0_rhb" AS "prg_rhb" ON ("prg_rhb"."prgid" = "prg"."id") WHERE ("med_org"."parentid" = '0' OR "prg"."med_org_id" = '0') AND ("prg_rhb"."resid" > '0' OR "prg_rhb"."result" IS NOT NULL) GROUP BY "med_org"."dicid", "med_org"."name" ORDER BY "prgcount" DESC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-23 14:51:25 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "med_org...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(626): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(362): Model_Ipra::GetReadyIpraMedOrgCounted()
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorgcount()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-23 14:52:54 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 369 ] in /var/www/ipra/application/classes/Controller/Ajax.php:369
2016-08-23 14:52:54 --- DEBUG: #0 /var/www/ipra/application/classes/Controller/Ajax.php(369): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/ipra/a...', 369, Array)
#1 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorgcount()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ipra/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/ipra/application/classes/Controller/Ajax.php:369
2016-08-23 21:47:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: med_org_id ~ APPPATH/classes/Model/Ipra.php [ 371 ] in /var/www/ipra/application/classes/Model/Ipra.php:371
2016-08-23 21:47:57 --- DEBUG: #0 /var/www/ipra/application/classes/Model/Ipra.php(371): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ipra/a...', 371, Array)
#1 /var/www/ipra/application/classes/Controller/Ajax.php(105): Model_Ipra::UpdPersonsIpraFull(Array)
#2 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/ipra/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/ipra/application/classes/Model/Ipra.php:371
2016-08-23 21:54:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: med_org_id ~ APPPATH/classes/Model/Ipra.php [ 371 ] in /var/www/ipra/application/classes/Model/Ipra.php:371
2016-08-23 21:54:12 --- DEBUG: #0 /var/www/ipra/application/classes/Model/Ipra.php(371): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ipra/a...', 371, Array)
#1 /var/www/ipra/application/classes/Controller/Ajax.php(105): Model_Ipra::UpdPersonsIpraFull(Array)
#2 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/ipra/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/ipra/application/classes/Model/Ipra.php:371
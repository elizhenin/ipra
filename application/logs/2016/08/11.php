<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-11 11:48:46 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column "medorg" of relation "users" does not exist
LINE 1: UPDATE "users" SET "medorg" = '8' WHERE "id" = '3'
                           ^ [ UPDATE "users" SET "medorg" = '8' WHERE "id" = '3' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-11 11:48:46 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE "users" ...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Users.php(138): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(300): Model_Users::AssocUser('3', '8')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_adminusersassoclistcomplete()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-11 17:54:11 --- EMERGENCY: Database_Exception [ 42803 ]: SQLSTATE[42803]: Grouping error: 7 ERROR:  column "med_org.name" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: SELECT "med_org"."dicid" AS "recid", "med_org"."name" AS "na...
                                             ^ [ SELECT "med_org"."dicid" AS "recid", "med_org"."name" AS "name", COUNT("prg_rhb"."id") AS "prgcount" FROM "med_org" RIGHT JOIN "prg0" AS "prg" ON ("med_org"."dicid" = "prg"."med_org_id") RIGHT JOIN "prg0_rhb" AS "prg_rhb" ON ("prg_rhb"."prgid" = "prg"."id") GROUP BY "med_org"."dicid" ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-11 17:54:11 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "med_org...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(504): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(357): Model_Ipra::GetIpraMedOrgCounted()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorgcount()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-11 17:54:36 --- EMERGENCY: Database_Exception [ 42803 ]: SQLSTATE[42803]: Grouping error: 7 ERROR:  column "med_org.name" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: SELECT "med_org"."dicid" AS "recid", "med_org"."name" AS "na...
                                             ^ [ SELECT "med_org"."dicid" AS "recid", "med_org"."name" AS "name", COUNT("prg_rhb"."id") AS "prgcount" FROM "med_org" RIGHT JOIN "prg0" AS "prg" ON ("med_org"."dicid" = "prg"."med_org_id") RIGHT JOIN "prg0_rhb" AS "prg_rhb" ON ("prg_rhb"."prgid" = "prg"."id") GROUP BY "med_org"."dicid" ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-11 17:54:36 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "med_org...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(504): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(357): Model_Ipra::GetIpraMedOrgCounted()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorgcount()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-11 17:55:47 --- EMERGENCY: Database_Exception [ 42803 ]: SQLSTATE[42803]: Grouping error: 7 ERROR:  column "med_org.dicid" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: SELECT "med_org"."dicid" AS "recid", "med_org"."name" AS "na...
               ^ [ SELECT "med_org"."dicid" AS "recid", "med_org"."name" AS "name", COUNT("prg_rhb"."id") AS "prgcount" FROM "med_org" RIGHT JOIN "prg0" AS "prg" ON ("med_org"."dicid" = "prg"."med_org_id") RIGHT JOIN "prg0_rhb" AS "prg_rhb" ON ("prg_rhb"."prgid" = "prg"."id") GROUP BY "med_org"."name" ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-11 17:55:47 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "med_org...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(504): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(357): Model_Ipra::GetIpraMedOrgCounted()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorgcount()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-11 17:56:04 --- EMERGENCY: Database_Exception [ 42803 ]: SQLSTATE[42803]: Grouping error: 7 ERROR:  column "med_org.id" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: SELECT "med_org"."id" AS "recid", "med_org"."name" AS "name"...
               ^ [ SELECT "med_org"."id" AS "recid", "med_org"."name" AS "name", COUNT("prg_rhb"."id") AS "prgcount" FROM "med_org" RIGHT JOIN "prg0" AS "prg" ON ("med_org"."dicid" = "prg"."med_org_id") RIGHT JOIN "prg0_rhb" AS "prg_rhb" ON ("prg_rhb"."prgid" = "prg"."id") GROUP BY "med_org"."name" ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-11 17:56:04 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "med_org...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(504): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(357): Model_Ipra::GetIpraMedOrgCounted()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorgcount()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-11 17:57:49 --- EMERGENCY: Database_Exception [ 42803 ]: SQLSTATE[42803]: Grouping error: 7 ERROR:  column "med_org.name" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: SELECT DISTINCT "med_org"."name" AS "name", COUNT("prg_rhb"....
                        ^ [ SELECT DISTINCT "med_org"."name" AS "name", COUNT("prg_rhb"."id") AS "prgcount" FROM "med_org" RIGHT JOIN "prg0" AS "prg" ON ("med_org"."dicid" = "prg"."med_org_id") RIGHT JOIN "prg0_rhb" AS "prg_rhb" ON ("prg_rhb"."prgid" = "prg"."id") ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-11 17:57:49 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT DISTINCT...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(504): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(357): Model_Ipra::GetIpraMedOrgCounted()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorgcount()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-11 17:59:17 --- EMERGENCY: Database_Exception [ 42803 ]: SQLSTATE[42803]: Grouping error: 7 ERROR:  column "med_org.name" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: SELECT "med_org"."name" AS "name", COUNT("prg_rhb"."id") AS ...
               ^ [ SELECT "med_org"."name" AS "name", COUNT("prg_rhb"."id") AS "prgcount" FROM "med_org" RIGHT JOIN "prg0" AS "prg" ON ("med_org"."dicid" = "prg"."med_org_id") RIGHT JOIN "prg0_rhb" AS "prg_rhb" ON ("prg_rhb"."prgid" = "prg"."id") GROUP BY "med_org"."dicid" ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-11 17:59:17 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "med_org...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(504): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(357): Model_Ipra::GetIpraMedOrgCounted()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorgcount()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-11 17:59:52 --- EMERGENCY: Database_Exception [ 42803 ]: SQLSTATE[42803]: Grouping error: 7 ERROR:  column "med_org.name" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: SELECT "med_org"."name" AS "dicid", COUNT("prg_rhb"."id") AS...
               ^ [ SELECT "med_org"."name" AS "dicid", COUNT("prg_rhb"."id") AS "prgcount" FROM "med_org" RIGHT JOIN "prg0" AS "prg" ON ("med_org"."dicid" = "prg"."med_org_id") RIGHT JOIN "prg0_rhb" AS "prg_rhb" ON ("prg_rhb"."prgid" = "prg"."id") GROUP BY "med_org"."dicid" ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-11 17:59:52 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "med_org...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(504): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(357): Model_Ipra::GetIpraMedOrgCounted()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorgcount()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-11 18:00:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Controller/Ajax.php [ 362 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:362
2016-08-11 18:00:12 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(362): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/msexml...', 362, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorgcount()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:362
2016-08-11 18:03:21 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Model_Catalog::GetMedOrg(), called in /var/www/msexml.lsbr.ru/application/classes/Controller/Stat.php on line 40 and defined ~ APPPATH/classes/Model/Catalog.php [ 99 ] in /var/www/msexml.lsbr.ru/application/classes/Model/Catalog.php:99
2016-08-11 18:03:21 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Model/Catalog.php(99): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/msexml...', 99, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Controller/Stat.php(40): Model_Catalog::GetMedOrg()
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Stat->action_medorgcount()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Stat))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/msexml.lsbr.ru/application/classes/Model/Catalog.php:99
2016-08-11 18:05:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Model/Ipra.php [ 508 ] in /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php:508
2016-08-11 18:05:34 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(508): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/msexml...', 508, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(357): Model_Ipra::GetIpraMedOrgCounted()
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorgcount()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php:508
2016-08-11 18:06:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Model/Ipra.php [ 509 ] in /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php:509
2016-08-11 18:06:49 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(509): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/msexml...', 509, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(357): Model_Ipra::GetIpraMedOrgCounted()
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorgcount()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php:509
<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-19 10:00:16 --- EMERGENCY: Database_Exception [ 42P01 ]: SQLSTATE[42P01]: Undefined table: 7 ERROR:  missing FROM-clause entry for table "uses"
LINE 1: ...S "password" FROM "med_org" LEFT JOIN "users" ON ("uses"."me...
                                                             ^ [ SELECT "med_org"."id" AS "id", "med_ord"."dicid" AS "dicid", "med_org"."name" AS "name", "users"."login" AS "login", "users"."password" AS "password" FROM "med_org" LEFT JOIN "users" ON ("uses"."med_org_id" = "med_org"."dicid") WHERE "deleted" = '0' ORDER BY "id" ASC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-19 10:00:16 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "med_org...', false, Array)
#1 /var/www/ipra/application/classes/Model/Catalog.php(130): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(322): Model_Catalog::GetMedOrgUsers()
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorglist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-19 10:00:36 --- EMERGENCY: Database_Exception [ 42P01 ]: SQLSTATE[42P01]: Undefined table: 7 ERROR:  missing FROM-clause entry for table "uses"
LINE 1: ...S "password" FROM "med_org" LEFT JOIN "users" ON ("uses"."me...
                                                             ^ [ SELECT "med_org"."id" AS "id", "med_ord"."dicid" AS "dicid", "med_org"."name" AS "name", "users"."login" AS "login", "users"."password" AS "password" FROM "med_org" LEFT JOIN "users" ON ("uses"."med_org_id" = "med_org"."dicid") WHERE "deleted" = '0' ORDER BY "id" ASC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-19 10:00:36 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "med_org...', false, Array)
#1 /var/www/ipra/application/classes/Model/Catalog.php(130): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(322): Model_Catalog::GetMedOrgUsers()
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorglist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-19 10:01:02 --- EMERGENCY: Database_Exception [ 42P01 ]: SQLSTATE[42P01]: Undefined table: 7 ERROR:  missing FROM-clause entry for table "med_ord"
LINE 1: SELECT "med_org"."id" AS "id", "med_ord"."dicid" AS "dicid",...
                                       ^ [ SELECT "med_org"."id" AS "id", "med_ord"."dicid" AS "dicid", "med_org"."name" AS "name", "users"."login" AS "login", "users"."password" AS "password" FROM "med_org" LEFT JOIN "users" ON ("users"."med_org_id" = "med_org"."dicid") WHERE "deleted" = '0' ORDER BY "id" ASC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-19 10:01:02 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "med_org...', false, Array)
#1 /var/www/ipra/application/classes/Model/Catalog.php(130): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(322): Model_Catalog::GetMedOrgUsers()
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorglist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-19 10:30:14 --- EMERGENCY: ErrorException [ 2 ]: gzuncompress(): data error ~ APPPATH/classes/Controller/Ajax.php [ 324 ] in file:line
2016-08-19 10:30:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'gzuncompress():...', '/var/www/ipra/a...', 324, Array)
#1 /var/www/ipra/application/classes/Controller/Ajax.php(324): gzuncompress('')
#2 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorglist()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/ipra/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-08-19 13:30:25 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 365 ] in /var/www/ipra/application/classes/Controller/Ajax.php:365
2016-08-19 13:30:25 --- DEBUG: #0 /var/www/ipra/application/classes/Controller/Ajax.php(365): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/ipra/a...', 365, Array)
#1 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorgcount()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ipra/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/ipra/application/classes/Controller/Ajax.php:365
2016-08-19 13:38:20 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 365 ] in /var/www/ipra/application/classes/Controller/Ajax.php:365
2016-08-19 13:38:20 --- DEBUG: #0 /var/www/ipra/application/classes/Controller/Ajax.php(365): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/ipra/a...', 365, Array)
#1 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorgcount()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ipra/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/ipra/application/classes/Controller/Ajax.php:365
2016-08-19 13:38:32 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 365 ] in /var/www/ipra/application/classes/Controller/Ajax.php:365
2016-08-19 13:38:32 --- DEBUG: #0 /var/www/ipra/application/classes/Controller/Ajax.php(365): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/ipra/a...', 365, Array)
#1 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorgcount()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ipra/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/ipra/application/classes/Controller/Ajax.php:365
2016-08-19 13:39:57 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 366 ] in /var/www/ipra/application/classes/Controller/Ajax.php:366
2016-08-19 13:39:57 --- DEBUG: #0 /var/www/ipra/application/classes/Controller/Ajax.php(366): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/ipra/a...', 366, Array)
#1 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorgcount()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ipra/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/ipra/application/classes/Controller/Ajax.php:366
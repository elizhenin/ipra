<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-05 01:17:19 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column "email" of relation "users" does not exist
LINE 1: INSERT INTO "users" ("login", "password", "email", "rights",...
                                                  ^ [ INSERT INTO "users" ("login", "password", "email", "rights", "active") VALUES ('', 'eJwDAAAAAAE=', NULL, NULL, '0') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-05 01:17:19 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "us...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Users.php(86): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(262): Model_Users::SaveUser('0', NULL, NULL, NULL, NULL, NULL)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_usersupdate()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-05 01:19:21 --- EMERGENCY: Database_Exception [ 23502 ]: SQLSTATE[23502]: Not null violation: 7 ERROR:  null value in column "rights" violates not-null constraint
DETAIL:  Failing row contains (4, , eJwDAAAAAAE=, null, 0, f, null). [ INSERT INTO "users" ("login", "password", "email", "rights", "active") VALUES ('', 'eJwDAAAAAAE=', NULL, NULL, '0') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-05 01:19:21 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "us...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Users.php(86): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(262): Model_Users::SaveUser('0', NULL, NULL, NULL, NULL, NULL)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_usersupdate()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-05 01:41:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: med_ord_id ~ APPPATH/classes/Model/Ipra.php [ 194 ] in /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php:194
2016-08-05 01:41:58 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(194): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/msexml...', 194, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(64): Model_Ipra::GetPersons('50', '0', NULL, NULL)
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpupersonlist()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php:194
2016-08-05 07:18:15 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column "med_org_name" does not exist
LINE 1: ...gin" LIKE '%elizh%' OR "rights" LIKE '%elizh%' OR "med_org_n...
                                                             ^ [ SELECT "users"."id" AS "recid", "users"."login" AS "login", "users"."rights" AS "rights", "users"."email" AS "email", "users"."active" AS "active", "med_org"."name" AS "med_org_name", "med_org"."id" AS "med_org_id" FROM "users" LEFT JOIN "med_org" ON ("users"."med_org_id" = "med_org"."id") WHERE "login" LIKE '%elizh%' OR "rights" LIKE '%elizh%' OR "med_org_name" LIKE '%elizh%' OR "email" LIKE '%elizh%' OR "active" LIKE '%elizh%' ORDER BY "rights" ASC LIMIT 100 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-05 07:18:15 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "users"....', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Users.php(36): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(234): Model_Users::GetAllUsers('100', '0', NULL, Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_userlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-05 07:18:47 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column "med_org_name" does not exist
LINE 1: ...login" LIKE '%eliz%' OR "rights" LIKE '%eliz%' OR "med_org_n...
                                                             ^ [ SELECT "users"."id" AS "recid", "users"."login" AS "login", "users"."rights" AS "rights", "users"."email" AS "email", "users"."active" AS "active", "med_org"."name" AS "med_org_name", "med_org"."id" AS "med_org_id" FROM "users" LEFT JOIN "med_org" ON ("users"."med_org_id" = "med_org"."id") WHERE "login" LIKE '%eliz%' OR "rights" LIKE '%eliz%' OR "med_org_name" LIKE '%eliz%' OR "email" LIKE '%eliz%' OR "active" LIKE '%eliz%' ORDER BY "rights" ASC LIMIT 100 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-05 07:18:47 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "users"....', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Users.php(36): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(234): Model_Users::GetAllUsers('100', '0', NULL, Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_userlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-05 07:20:18 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column "med_org_name" does not exist
LINE 1: ... "login" LIKE '%eli%' OR "rights" LIKE '%eli%' OR "med_org_n...
                                                             ^ [ SELECT COUNT("id") AS "count" FROM "users" WHERE "login" LIKE '%eli%' OR "rights" LIKE '%eli%' OR "med_org_name" LIKE '%eli%' OR "email" LIKE '%eli%' OR "active" LIKE '%eli%' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-05 07:20:18 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT("i...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Users.php(56): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(236): Model_Users::GetAllUsersCount(Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_userlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-05 07:20:43 --- EMERGENCY: Database_Exception [ 42883 ]: SQLSTATE[42883]: Undefined function: 7 ERROR:  operator does not exist: boolean ~~ unknown
LINE 1: ... LIKE '%eli%' OR "email" LIKE '%eli%' OR "active" LIKE '%eli...
                                                             ^
HINT:  No operator matches the given name and argument type(s). You might need to add explicit type casts. [ SELECT "users"."id" AS "recid", "users"."login" AS "login", "users"."rights" AS "rights", "users"."email" AS "email", "users"."active" AS "active", "med_org"."name" AS "med_org_name", "med_org"."id" AS "med_org_id" FROM "users" LEFT JOIN "med_org" ON ("users"."med_org_id" = "med_org"."id") WHERE "login" LIKE '%eli%' OR "rights" LIKE '%eli%' OR "email" LIKE '%eli%' OR "active" LIKE '%eli%' ORDER BY "rights" ASC LIMIT 100 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-05 07:20:43 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "users"....', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Users.php(39): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(234): Model_Users::GetAllUsers('100', '0', NULL, Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_userlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-05 07:21:25 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column "med_org_name" does not exist
LINE 1: ... "login" LIKE '%eli%' OR "rights" LIKE '%eli%' OR "med_org_n...
                                                             ^ [ SELECT "users"."id" AS "recid", "users"."login" AS "login", "users"."rights" AS "rights", "users"."email" AS "email", "users"."active" AS "active", "med_org"."name" AS "med_org_name", "med_org"."id" AS "med_org_id" FROM "users" LEFT JOIN "med_org" ON ("users"."med_org_id" = "med_org"."id") WHERE "login" LIKE '%eli%' OR "rights" LIKE '%eli%' OR "med_org_name" LIKE '%eli%' OR "email" LIKE '%eli%' OR "active" LIKE '%eli%' ORDER BY "rights" ASC LIMIT 100 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-05 07:21:25 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "users"....', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Users.php(40): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(234): Model_Users::GetAllUsers('100', '0', NULL, Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_userlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-05 07:21:44 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column "med_org_name" does not exist
LINE 1: ... "login" LIKE '%eli%' OR "rights" LIKE '%eli%' OR "med_org_n...
                                                             ^ [ SELECT COUNT("id") AS "count" FROM "users" WHERE "login" LIKE '%eli%' OR "rights" LIKE '%eli%' OR "med_org_name" LIKE '%eli%' OR "email" LIKE '%eli%' OR "active" LIKE '%eli%' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-05 07:21:44 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT("i...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Users.php(57): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(236): Model_Users::GetAllUsersCount(Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_userlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-05 07:22:25 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column "med_org_name" does not exist
LINE 1: ... "login" LIKE '%eli%' OR "rights" LIKE '%eli%' OR "med_org_n...
                                                             ^ [ SELECT COUNT("id") AS "count" FROM "users" WHERE "login" LIKE '%eli%' OR "rights" LIKE '%eli%' OR "med_org_name" LIKE '%eli%' OR "email" LIKE '%eli%' OR "active" LIKE '%eli%' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-05 07:22:25 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT("i...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Users.php(56): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(236): Model_Users::GetAllUsersCount(Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_userlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-05 07:23:22 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column "med_org_name" does not exist
LINE 1: ... "login" LIKE '%eli%' OR "rights" LIKE '%eli%' OR "med_org_n...
                                                             ^ [ SELECT "users"."id" AS "recid", "users"."login" AS "login", "users"."rights" AS "rights", "users"."email" AS "email", "users"."active" AS "active", "med_org"."name" AS "med_org_name", "med_org"."id" AS "med_org_id" FROM "users" LEFT JOIN "med_org" ON ("users"."med_org_id" = "med_org"."id") WHERE "login" LIKE '%eli%' OR "rights" LIKE '%eli%' OR "med_org_name" LIKE '%eli%' OR "email" LIKE '%eli%' OR "active" LIKE '%eli%' ORDER BY "rights" ASC LIMIT 100 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-05 07:23:22 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "users"....', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Users.php(40): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(234): Model_Users::GetAllUsers('100', '0', NULL, Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_userlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-05 07:28:50 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column "med_org_name" does not exist
LINE 1: ... "login" LIKE '%eli%' OR "rights" LIKE '%eli%' OR "med_org_n...
                                                             ^ [ SELECT COUNT("id") AS "count" FROM "users" WHERE "login" LIKE '%eli%' OR "rights" LIKE '%eli%' OR "med_org_name" LIKE '%eli%' OR "email" LIKE '%eli%' OR "active" LIKE '%eli%' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-05 07:28:50 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT("i...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Users.php(57): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(236): Model_Users::GetAllUsersCount(Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_userlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-05 07:29:20 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column "med_org_name" does not exist
LINE 1: ... "login" LIKE '%eli%' OR "rights" LIKE '%eli%' OR "med_org_n...
                                                             ^ [ SELECT COUNT("id") AS "count" FROM "users" WHERE "login" LIKE '%eli%' OR "rights" LIKE '%eli%' OR "med_org_name" LIKE '%eli%' OR "email" LIKE '%eli%' OR "active" LIKE '%eli%' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-05 07:29:20 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT("i...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Users.php(57): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(236): Model_Users::GetAllUsersCount(Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_userlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-05 07:33:18 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column "med_org_name" does not exist
LINE 1: ...login" LIKE '%eeli%' OR "rights" LIKE '%eeli%' OR "med_org_n...
                                                             ^ [ SELECT COUNT("id") AS "count" FROM "users" WHERE "login" LIKE '%eeli%' OR "rights" LIKE '%eeli%' OR "med_org_name" LIKE '%eeli%' OR "email" LIKE '%eeli%' OR "active" LIKE '%eeli%' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-05 07:33:18 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT("i...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Users.php(57): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(236): Model_Users::GetAllUsersCount(Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_userlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
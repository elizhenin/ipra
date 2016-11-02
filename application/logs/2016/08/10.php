<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-10 12:31:05 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column "med_org_name" does not exist
LINE 1: ...med_org_id" AS "med_org_id" FROM "users" ORDER BY "med_org_n...
                                                             ^ [ SELECT "users"."id" AS "recid", "users"."login" AS "login", "users"."rights" AS "rights", "users"."email" AS "email", "users"."active" AS "active", "users"."med_org_id" AS "med_org_id" FROM "users" ORDER BY "med_org_name" ASC LIMIT 100 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-10 12:31:05 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "users"....', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Users.php(37): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(243): Model_Users::GetAllUsers('100', '0', Array, NULL)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_userlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-10 12:31:31 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column "med_org_name" does not exist
LINE 1: ...med_org_id" AS "med_org_id" FROM "users" ORDER BY "med_org_n...
                                                             ^ [ SELECT "users"."id" AS "recid", "users"."login" AS "login", "users"."rights" AS "rights", "users"."email" AS "email", "users"."active" AS "active", "users"."med_org_id" AS "med_org_id" FROM "users" ORDER BY "med_org_name" ASC LIMIT 100 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-10 12:31:31 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "users"....', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Users.php(37): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(243): Model_Users::GetAllUsers('100', '0', Array, NULL)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_userlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-10 12:40:18 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column "med_org_name" does not exist
LINE 1: ...med_org_id" AS "med_org_id" FROM "users" ORDER BY "med_org_n...
                                                             ^ [ SELECT "users"."id" AS "recid", "users"."login" AS "login", "users"."rights" AS "rights", "users"."email" AS "email", "users"."active" AS "active", "users"."med_org_id" AS "med_org_id" FROM "users" ORDER BY "med_org_name" ASC LIMIT 100 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-10 12:40:18 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "users"....', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Users.php(39): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(243): Model_Users::GetAllUsers('100', '0', Array, NULL)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_userlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-10 12:45:18 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column "med_org_name" does not exist
LINE 1: ...med_org_id" AS "med_org_id" FROM "users" ORDER BY "med_org_n...
                                                             ^ [ SELECT "users"."id" AS "recid", "users"."login" AS "login", "users"."rights" AS "rights", "users"."email" AS "email", "users"."active" AS "active", "users"."med_org_id" AS "med_org_id" FROM "users" ORDER BY "med_org_name" DESC LIMIT 100 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-10 12:45:18 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "users"....', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Users.php(39): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(243): Model_Users::GetAllUsers('100', '0', Array, NULL)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_userlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-10 12:45:26 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column "med_org_name" does not exist
LINE 1: ...med_org_id" AS "med_org_id" FROM "users" ORDER BY "med_org_n...
                                                             ^ [ SELECT "users"."id" AS "recid", "users"."login" AS "login", "users"."rights" AS "rights", "users"."email" AS "email", "users"."active" AS "active", "users"."med_org_id" AS "med_org_id" FROM "users" ORDER BY "med_org_name" ASC LIMIT 100 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-10 12:45:26 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "users"....', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Users.php(39): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(243): Model_Users::GetAllUsers('100', '0', Array, NULL)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_userlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-10 15:24:14 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 181 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:181
2016-08-10 15:24:14 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(181): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 181, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statiprareadylist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:181
2016-08-10 15:25:28 --- EMERGENCY: Database_Exception [ 42P01 ]: SQLSTATE[42P01]: Undefined table: 7 ERROR:  missing FROM-clause entry for table "prg"
LINE 1: ...."resid" != '0' OR "prg_rhb"."result" != '') AND ("prg"."med...
                                                             ^ [ SELECT COUNT("id") AS "count" FROM "prg0_rhb" AS "prg_rhb" WHERE ("prg_rhb"."resid" != '0' OR "prg_rhb"."result" != '') AND ("prg"."med_org_id" = '1') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-10 15:25:28 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT("i...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(482): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(179): Model_Ipra::CountIpraReady(Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statiprareadylist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-10 15:27:20 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column "prg_rhb.id" does not exist
LINE 1: SELECT COUNT("prg_rhb.id") AS "count" FROM "prg0_rhb" AS "pr...
                     ^ [ SELECT COUNT("prg_rhb.id") AS "count" FROM "prg0_rhb" AS "prg_rhb" RIGHT JOIN "prg0" AS "prg" ON ("prg_rhb"."prgid" = "prg"."id") WHERE ("prg_rhb"."resid" != '0' OR "prg_rhb"."result" != '') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-10 15:27:20 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT("p...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(484): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(179): Model_Ipra::CountIpraReady(NULL)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statiprareadylist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-10 15:27:51 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column "prg0_rhb.id" does not exist
LINE 1: SELECT COUNT("prg0_rhb.id") AS "count" FROM "prg0_rhb" AS "p...
                     ^ [ SELECT COUNT("prg0_rhb.id") AS "count" FROM "prg0_rhb" AS "prg_rhb" RIGHT JOIN "prg0" AS "prg" ON ("prg_rhb"."prgid" = "prg"."id") WHERE ("prg_rhb"."resid" != '0' OR "prg_rhb"."result" != '') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-10 15:27:51 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT("p...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(484): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(179): Model_Ipra::CountIpraReady(NULL)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statiprareadylist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-10 15:30:05 --- EMERGENCY: Database_Exception [ 42601 ]: SQLSTATE[42601]: Syntax error: 7 ERROR:  syntax error at or near ")"
LINE 1: ...."resid" != '0' OR "prg_rhb"."result" != '') AND () LIMIT 50...
                                                             ^ [ SELECT "prg_rhb"."id" AS "recid", "prg_rhb"."dt_exc" AS "date", "prg_rhb"."name" AS "ex_name", "prg_rhb"."resid" AS "resid", "prg"."prgnum" AS "prgnum", "prg"."snils" AS "snils", "prg"."lname" AS "lname", "prg"."fname" AS "fname", "prg"."sname" AS "sname", "prg"."bdate" AS "bdate", "med_org"."name" AS "med_org", "med_org"."dicid" AS "med_org_id", "rhb_type"."name" AS "type", "rhb_evnt"."name" AS "event", "rhb_dic"."name" AS "dicid", "rhb_tsr"."name" AS "tsrid" FROM "prg0_rhb" AS "prg_rhb" LEFT JOIN "rhb_type" ON ("rhb_type"."id" = "prg_rhb"."typeid") LEFT JOIN "rhb_evnt" ON ("rhb_evnt"."id" = "prg_rhb"."evntid") LEFT JOIN "rhb_dic" ON ("rhb_dic"."id" = "prg_rhb"."dicid") LEFT JOIN "rhb_tsr" ON ("rhb_tsr"."id" = "prg_rhb"."tsrid") RIGHT JOIN "prg0" AS "prg" ON ("prg_rhb"."prgid" = "prg"."id") LEFT JOIN "med_org" ON ("med_org"."dicid" = "prg"."med_org_id") WHERE ("prg_rhb"."resid" != '0' OR "prg_rhb"."result" != '') AND () LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-10 15:30:05 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg_rhb...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(452): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(177): Model_Ipra::GetIpraReady('50', '0', Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statiprareadylist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-10 15:31:48 --- EMERGENCY: Database_Exception [ 42601 ]: SQLSTATE[42601]: Syntax error: 7 ERROR:  syntax error at or near ")"
LINE 1: ..."prg_rhb"."resid" != '0' OR "prg_rhb"."result" != '') AND ()
                                                                      ^ [ SELECT COUNT("prg_rhb"."id") AS "count" FROM "prg0_rhb" AS "prg_rhb" RIGHT JOIN "prg0" AS "prg" ON ("prg_rhb"."prgid" = "prg"."id") WHERE ("prg_rhb"."resid" != '0' OR "prg_rhb"."result" != '') AND () ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-10 15:31:48 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT("p...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(484): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(179): Model_Ipra::CountIpraReady(Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statiprareadylist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-10 15:31:52 --- EMERGENCY: Database_Exception [ 42601 ]: SQLSTATE[42601]: Syntax error: 7 ERROR:  syntax error at or near ")"
LINE 1: ..."prg_rhb"."resid" != '0' OR "prg_rhb"."result" != '') AND ()
                                                                      ^ [ SELECT COUNT("prg_rhb"."id") AS "count" FROM "prg0_rhb" AS "prg_rhb" RIGHT JOIN "prg0" AS "prg" ON ("prg_rhb"."prgid" = "prg"."id") WHERE ("prg_rhb"."resid" != '0' OR "prg_rhb"."result" != '') AND () ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-10 15:31:52 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT("p...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(484): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(179): Model_Ipra::CountIpraReady(Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statiprareadylist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-10 15:34:10 --- EMERGENCY: Database_Exception [ 42601 ]: SQLSTATE[42601]: Syntax error: 7 ERROR:  syntax error at end of input
LINE 1: ...("prg_rhb"."resid" != '0' OR "prg_rhb"."result" != '') AND (
                                                                       ^ [ SELECT COUNT("prg_rhb"."id") AS "count" FROM "prg0_rhb" AS "prg_rhb" RIGHT JOIN "prg0" AS "prg" ON ("prg_rhb"."prgid" = "prg"."id") WHERE ("prg_rhb"."resid" != '0' OR "prg_rhb"."result" != '') AND ( ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-10 15:34:10 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT("p...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(484): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(179): Model_Ipra::CountIpraReady(Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statiprareadylist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
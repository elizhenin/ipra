<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-17 12:11:47 --- EMERGENCY: Database_Exception [ 7 ]: SQLSTATE[08006] [7] could not translate host name "lsbr.ru:64523" to address: Имя или служба не известны ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /var/www/ipra/modules/database/classes/Kohana/Database/PDO.php:212
2016-08-17 12:11:47 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/PDO.php(212): Kohana_Database_PDO->connect()
#1 /var/www/ipra/application/classes/Model/Users.php(200): Kohana_Database_PDO->begin()
#2 /var/www/ipra/application/classes/Controller/Tmp.php(67): Model_Users::test()
#3 /var/www/ipra/system/classes/Kohana/Controller.php(87): Controller_Tmp->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/PDO.php:212
2016-08-17 12:14:21 --- EMERGENCY: Database_Exception [ 42P01 ]: SQLSTATE[42P01]: Undefined table: 7 ERROR:  relation "rhb_reg" does not exist
LINE 1: SELECT * FROM "rhb_reg"
                      ^ [ SELECT * FROM "rhb_reg" ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-17 12:14:21 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM "...', false, Array)
#1 /var/www/ipra/application/classes/Model/Users.php(213): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Tmp.php(67): Model_Users::test()
#3 /var/www/ipra/system/classes/Kohana/Controller.php(87): Controller_Tmp->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-17 12:19:17 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error [  ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/application/classes/Model/Users.php:213
2016-08-17 12:19:17 --- DEBUG: #0 /var/www/ipra/application/classes/Model/Users.php(213): Kohana_Database_PDO->query(1, false, 'SELECT "del_log...')
#1 /var/www/ipra/application/classes/Controller/Tmp.php(67): Model_Users::test()
#2 /var/www/ipra/system/classes/Kohana/Controller.php(87): Controller_Tmp->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/ipra/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/ipra/application/classes/Model/Users.php:213
2016-08-17 12:19:36 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error [  ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/application/classes/Model/Users.php:213
2016-08-17 12:19:36 --- DEBUG: #0 /var/www/ipra/application/classes/Model/Users.php(213): Kohana_Database_PDO->query(1, false, 'SELECT "del_log...')
#1 /var/www/ipra/application/classes/Controller/Tmp.php(67): Model_Users::test()
#2 /var/www/ipra/system/classes/Kohana/Controller.php(87): Controller_Tmp->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/ipra/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/ipra/application/classes/Model/Users.php:213
2016-08-17 12:20:04 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error [  ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/application/classes/Model/Users.php:213
2016-08-17 12:20:04 --- DEBUG: #0 /var/www/ipra/application/classes/Model/Users.php(213): Kohana_Database_PDO->query(1, false, Object(Database_Query_Builder_Select))
#1 /var/www/ipra/application/classes/Controller/Tmp.php(67): Model_Users::test()
#2 /var/www/ipra/system/classes/Kohana/Controller.php(87): Controller_Tmp->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/ipra/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/ipra/application/classes/Model/Users.php:213
2016-08-17 12:38:59 --- EMERGENCY: Database_Exception [ 42803 ]: SQLSTATE[42803]: Grouping error: 7 ERROR:  column "med_org.name" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: ... AS "recid", COUNT("prg_rhb"."id") AS "prgcount", "med_org"....
                                                             ^ [ SELECT "med_org"."dicid" AS "recid", COUNT("prg_rhb"."id") AS "prgcount", "med_org"."name" AS "name" FROM "med_org" RIGHT JOIN "prg0" AS "prg" ON ("med_org"."dicid" = "prg"."med_org_id") RIGHT JOIN "prg0_rhb" AS "prg_rhb" ON ("prg_rhb"."prgid" = "prg"."id") WHERE "med_org"."parentid" = '0' GROUP BY "med_org"."dicid" ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-17 12:38:59 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "med_org...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(530): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(357): Model_Ipra::GetIpraMedOrgCounted()
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorgcount()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-17 12:39:21 --- EMERGENCY: Database_Exception [ 42803 ]: SQLSTATE[42803]: Grouping error: 7 ERROR:  column "med_org.name" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: ... AS "recid", COUNT("prg_rhb"."id") AS "prgcount", "med_org"....
                                                             ^ [ SELECT "med_org"."dicid" AS "recid", COUNT("prg_rhb"."id") AS "prgcount", "med_org"."name" AS "name" FROM "med_org" RIGHT JOIN "prg0" AS "prg" ON ("med_org"."dicid" = "prg"."med_org_id") RIGHT JOIN "prg0_rhb" AS "prg_rhb" ON ("prg_rhb"."prgid" = "prg"."id") WHERE "med_org"."parentid" = '0' GROUP BY "med_org"."dicid" ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-17 12:39:21 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "med_org...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(530): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(357): Model_Ipra::GetIpraMedOrgCounted()
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorgcount()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-18 13:00:15 --- EMERGENCY: Database_Exception [ 42601 ]: SQLSTATE[42601]: Syntax error: 7 ERROR:  syntax error at or near "LIMIT"
LINE 1: ...162016-04-08310.22.36/20162016-04-08' WHERE "id" = 2 LIMIT 1
                                                                ^ [ UPDATE "prg0" SET "search" = '2016-08-16158-849-409 28Кущик Виктория Павловна2003-05-07328.22.36/20162016-04-08310.22.36/20162016-04-08' WHERE "id" = 2 LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-18 13:00:15 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE "prg0" S...', false, Array)
#1 /var/www/ipra/application/classes/Controller/Tmp.php(96): Kohana_Database_Query->execute()
#2 /var/www/ipra/system/classes/Kohana/Controller.php(87): Controller_Tmp->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lpu))
#5 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/ipra/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-18 13:05:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: search ~ APPPATH/classes/Model/Ipra.php [ 194 ] in /var/www/ipra/application/classes/Model/Ipra.php:194
2016-08-18 13:05:51 --- DEBUG: #0 /var/www/ipra/application/classes/Model/Ipra.php(194): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ipra/a...', 194, Array)
#1 /var/www/ipra/application/classes/Controller/Ajax.php(57): Model_Ipra::GetPersons('50', '0', NULL, Array)
#2 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpupersonlist()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/ipra/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/ipra/application/classes/Model/Ipra.php:194
2016-08-18 13:06:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: search ~ APPPATH/classes/Model/Ipra.php [ 194 ] in /var/www/ipra/application/classes/Model/Ipra.php:194
2016-08-18 13:06:17 --- DEBUG: #0 /var/www/ipra/application/classes/Model/Ipra.php(194): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ipra/a...', 194, Array)
#1 /var/www/ipra/application/classes/Controller/Ajax.php(57): Model_Ipra::GetPersons('50', '0', NULL, Array)
#2 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpupersonlist()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/ipra/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/ipra/application/classes/Model/Ipra.php:194
2016-08-18 13:16:52 --- EMERGENCY: Database_Exception [ 42601 ]: SQLSTATE[42601]: Syntax error: 7 ERROR:  syntax error at or near "CILIKE"
LINE 1: ...g_oiv"."id" = "prg"."oivid") WHERE "prg"."search" CILIKE '%5...
                                                             ^ [ SELECT "prg"."id" AS "id", "prg_okr"."name" AS "okrug", "prg_reg"."name" AS "region", "prg"."nreg" AS "nreg", "prg"."dt" AS "dt", "prg"."snils" AS "snils", "prg"."mseid" AS "mseid", "prg"."lname" AS "lname", "prg"."fname" AS "fname", "prg"."sname" AS "sname", "prg"."bdate" AS "bdate", "prg"."gndr" AS "gndr", "prg_oiv"."name" AS "org_isp_vlast", "prg"."docnum" AS "docnum", "prg"."docdt" AS "docdt", "prg"."prg" AS "prg", "prg"."prgnum" AS "prgnum", "prg"."prgdt" AS "prgdt" FROM "prg0" AS "prg" JOIN "prg_okr" ON ("prg_okr"."id" = "prg"."okr_id") JOIN "prg_reg" ON ("prg_reg"."id" = "prg"."nreg") JOIN "prg_oiv" ON ("prg_oiv"."id" = "prg"."oivid") WHERE "prg"."search" CILIKE '%58%' OR "prg"."search" CILIKE '%58%' OR "prg"."search" CILIKE '%58%' OR "prg"."search" CILIKE '%58%' OR "prg"."search" CILIKE '%58%' OR "prg"."search" CILIKE '%58%' AND "prg"."med_org_id" = 29 ORDER BY "prg"."prgdt" DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-18 13:16:52 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "prg"."i...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(208): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(57): Model_Ipra::GetPersons('50', '0', NULL, Array)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpupersonlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-08-18 13:24:33 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 61 ] in /var/www/ipra/application/classes/Controller/Ajax.php:61
2016-08-18 13:24:33 --- DEBUG: #0 /var/www/ipra/application/classes/Controller/Ajax.php(61): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/ipra/a...', 61, Array)
#1 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpupersonlist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ipra/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/ipra/application/classes/Controller/Ajax.php:61
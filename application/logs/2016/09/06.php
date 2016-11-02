<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-09-06 19:32:25 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: ""
LINE 1: ...org_id", "dt", "okr_id", "nreg", "oivid") VALUES ('', 'fyu6f...
                                                             ^ [ INSERT INTO "prg0" ("id", "lname", "fname", "sname", "bdate", "snils", "med_org_id", "dt", "okr_id", "nreg", "oivid") VALUES ('', 'fyu6fgkujgf', '354edtrd', '', '2016-09-28', 'bjygt8 787 87 ', 0, NOW(), 1, 36, 1) ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-06 19:32:25 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "pr...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(205): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(190): Model_Ipra::AddPerson(Array)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuoutgoingupdate()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-06 19:33:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Ipra' not found ~ APPPATH/classes/Controller/Ajax.php [ 71 ] in file:line
2016-09-06 19:33:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-06 19:33:22 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: ""
LINE 1: ... "med_org_id", "okr_id", "nreg", "oivid") VALUES ('', '7t', ...
                                                             ^ [ INSERT INTO "prg0" ("id", "lname", "fname", "sname", "bdate", "snils", "med_org_id", "okr_id", "nreg", "oivid") VALUES ('', '7t', 'ygfhjf', '', '2016-09-07', 'ftui', 0, 1, 36, 1) ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-06 19:33:22 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "pr...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(205): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(190): Model_Ipra::AddPerson(Array)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuoutgoingupdate()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-06 19:36:53 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: ""
LINE 1: ... "med_org_id", "okr_id", "nreg", "oivid") VALUES ('', '2016-...
                                                             ^ [ INSERT INTO "prg0" ("id", "dt", "lname", "fname", "sname", "bdate", "snils", "med_org_id", "okr_id", "nreg", "oivid") VALUES ('', '2016-09-13', 'uyguglug', 'glglugulg', 'lug', '2016-09-08', 'iyi8 98y9 8y 98', 0, 1, 36, 1) ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-06 19:36:53 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "pr...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(205): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(191): Model_Ipra::AddPerson(Array)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuoutgoingupdate()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-06 19:38:22 --- EMERGENCY: Database_Exception [ 22021 ]: SQLSTATE[22021]: Character not in repertoire: 7 ERROR:  invalid byte sequence for encoding "UTF8": 0xd0 0x20 [ UPDATE "prg0" SET "id" = '25671', "dt" = '2016-09-07', "lname" = 'Другой', "fname" = 'Тестовый', "sname" = 'Человек', "bdate" = '2016-09-08', "snils" = 'и его сн� ', "med_org_id" = 0, "okr_id" = 1, "nreg" = 36, "oivid" = 1 WHERE "id" = '25671' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-06 19:38:22 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE "prg0" S...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(214): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(191): Model_Ipra::AddPerson(Array)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuoutgoingupdate()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-06 19:39:06 --- EMERGENCY: Database_Exception [ 22021 ]: SQLSTATE[22021]: Character not in repertoire: 7 ERROR:  invalid byte sequence for encoding "UTF8": 0xd0 0x20 [ UPDATE "prg0" SET "id" = '25671', "dt" = '2016-09-07', "lname" = 'Другой', "fname" = 'тЕстовый', "sname" = 'Человек', "bdate" = '2016-09-08', "snils" = 'и его сн� ', "med_org_id" = 0, "okr_id" = 1, "nreg" = 36, "oivid" = 1 WHERE "id" = '25671' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-06 19:39:06 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE "prg0" S...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(214): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(191): Model_Ipra::AddPerson(Array)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuoutgoingupdate()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-06 19:40:57 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column prg.mse does not exist
LINE 1: ... "med_org_id" = '0' AND "prg"."foreign" = '0' AND "prg"."mse...
                                                             ^ [ SELECT "id", "prgnum", "prgdt", "med_org_txt", "med_org_id", "fname", "lname", "sname", "bdate", "snils" FROM "prg0" AS "prg" WHERE "med_org_id" = '0' AND "prg"."foreign" = '0' AND "prg"."mse" != '0' ORDER BY "prgdt" DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-06 19:40:57 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "id", "p...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(550): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(59): Model_Ipra::GetPersonsUnassoc(NULL, '50', '0')
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpupersonlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-06 19:41:11 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column prg.mse does not exist
LINE 1: ... "med_org_id" = '0' AND "prg"."foreign" = '0' AND "prg"."mse...
                                                             ^ [ SELECT "id", "prgnum", "prgdt", "med_org_txt", "med_org_id", "fname", "lname", "sname", "bdate", "snils" FROM "prg0" AS "prg" WHERE "med_org_id" = '0' AND "prg"."foreign" = '0' AND "prg"."mse" != '0' ORDER BY "prgdt" DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-06 19:41:11 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "id", "p...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(550): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(59): Model_Ipra::GetPersonsUnassoc(NULL, '50', '0')
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpupersonlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-06 19:50:58 --- EMERGENCY: ErrorException [ 2 ]: trim() expects parameter 1 to be string, array given ~ APPPATH/classes/Controller/Lpu.php [ 22 ] in file:line
2016-09-06 19:50:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'trim() expects ...', '/var/www/ipra/a...', 22, Array)
#1 /var/www/ipra/application/classes/Controller/Lpu.php(22): trim(Array)
#2 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Lpu->action_outgoing()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lpu))
#5 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/ipra/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-09-06 19:51:33 --- EMERGENCY: ErrorException [ 2 ]: trim() expects parameter 1 to be string, array given ~ APPPATH/classes/Controller/Lpu.php [ 22 ] in file:line
2016-09-06 19:51:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'trim() expects ...', '/var/www/ipra/a...', 22, Array)
#1 /var/www/ipra/application/classes/Controller/Lpu.php(22): trim(Array)
#2 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Lpu->action_outgoing()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lpu))
#5 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/ipra/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-09-06 19:52:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Controller/Lpu.php [ 22 ] in /var/www/ipra/application/classes/Controller/Lpu.php:22
2016-09-06 19:52:08 --- DEBUG: #0 /var/www/ipra/application/classes/Controller/Lpu.php(22): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ipra/a...', 22, Array)
#1 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Lpu->action_outgoing()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lpu))
#4 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ipra/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/ipra/application/classes/Controller/Lpu.php:22
2016-09-06 19:53:39 --- EMERGENCY: ErrorException [ 2 ]: trim() expects parameter 1 to be string, array given ~ APPPATH/classes/Controller/Lpu.php [ 22 ] in file:line
2016-09-06 19:53:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'trim() expects ...', '/var/www/ipra/a...', 22, Array)
#1 /var/www/ipra/application/classes/Controller/Lpu.php(22): trim(Array)
#2 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Lpu->action_outgoing()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lpu))
#5 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/ipra/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-01 05:07:28 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 57 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:57
2016-08-01 05:07:28 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(57): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 57, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpupersonlist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:57
2016-08-01 05:07:43 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 57 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:57
2016-08-01 05:07:43 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(57): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 57, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpupersonlist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:57
2016-08-01 05:09:43 --- EMERGENCY: Database_Exception [ 42601 ]: SQLSTATE[42601]: Syntax error: 7 ERROR:  zero-length delimited identifier at or near """"
LINE 1: ...prgnum", "prgdt", "mseid") VALUES ('1', '36', NOW(""), '039-...
                                                             ^ [ INSERT INTO "prg0" ("okr_id", "nreg", "dt", "snils", "lname", "fname", "sname", "bdate", "gndr", "oivid", "docnum", "docdt", "prg", "prgnum", "prgdt", "mseid") VALUES ('1', '36', NOW(""), '039-768-093 10', 'Поволяев', 'Александр', 'Петрович', '1954-05-28', 1, '1', '14.8.36/2016', '2016-01-13', 1, '17.8.36/2016', '2016-01-13', '0a0a434c-66be-4776-a396-433c012987cd') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-01 05:09:43 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "pr...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(85): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Tmp.php(53): Model_Ipra::InsertXML('\xEF\xBB\xBF<?xml versio...')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(87): Controller_Tmp->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lpu))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-01 05:13:22 --- EMERGENCY: Database_Exception [ 42601 ]: SQLSTATE[42601]: Syntax error: 7 ERROR:  zero-length delimited identifier at or near """"
LINE 1: ...prgnum", "prgdt", "mseid") VALUES ('1', '36', NOW(""), '039-...
                                                             ^ [ INSERT INTO "prg0" ("okr_id", "nreg", "dt", "snils", "lname", "fname", "sname", "bdate", "gndr", "oivid", "docnum", "docdt", "prg", "prgnum", "prgdt", "mseid") VALUES ('1', '36', NOW(""), '039-768-093 10', 'Поволяев', 'Александр', 'Петрович', '1954-05-28', 1, '1', '14.8.36/2016', '2016-01-13', 1, '17.8.36/2016', '2016-01-13', '0a0a434c-66be-4776-a396-433c012987cd') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-01 05:13:22 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "pr...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(85): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Tmp.php(53): Model_Ipra::InsertXML('\xEF\xBB\xBF<?xml versio...')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(87): Controller_Tmp->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lpu))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-01 06:29:20 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 58 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:58
2016-08-01 06:29:20 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(58): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 58, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpupersonlist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:58
2016-08-01 06:29:38 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 58 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:58
2016-08-01 06:29:38 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(58): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 58, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpupersonlist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:58
2016-08-01 06:31:29 --- EMERGENCY: Database_Exception [ 42803 ]: SQLSTATE[42803]: Grouping error: 7 ERROR:  column "prg.prgdt" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: ... "prgnum" LIKE '%%' OR "snils" LIKE '%%' ORDER BY "prg"."prg...
                                                             ^ [ SELECT COUNT("id") AS "count" FROM "prg0" AS "prg" WHERE "lname" LIKE '%%' OR "fname" LIKE '%%' OR "sname" LIKE '%%' OR "prgnum" LIKE '%%' OR "snils" LIKE '%%' ORDER BY "prg"."prgdt" DESC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-01 06:31:29 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT("i...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(223): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(56): Model_Ipra::CountPersons(NULL, Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpupersonlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-01 06:31:49 --- EMERGENCY: Database_Exception [ 42803 ]: SQLSTATE[42803]: Grouping error: 7 ERROR:  column "prg.prgdt" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: ...prgnum" LIKE '%f%' OR "snils" LIKE '%f%' ORDER BY "prg"."prg...
                                                             ^ [ SELECT COUNT("id") AS "count" FROM "prg0" AS "prg" WHERE "lname" LIKE '%f%' OR "fname" LIKE '%f%' OR "sname" LIKE '%f%' OR "prgnum" LIKE '%f%' OR "snils" LIKE '%f%' ORDER BY "prg"."prgdt" DESC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-01 06:31:49 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT("i...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(223): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(56): Model_Ipra::CountPersons(NULL, Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpupersonlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-01 06:32:07 --- EMERGENCY: Database_Exception [ 42803 ]: SQLSTATE[42803]: Grouping error: 7 ERROR:  column "prg.prgdt" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: ...NT("id") AS "count" FROM "prg0" AS "prg" ORDER BY "prg"."prg...
                                                             ^ [ SELECT COUNT("id") AS "count" FROM "prg0" AS "prg" ORDER BY "prg"."prgdt" DESC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-01 06:32:07 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT("i...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(223): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(56): Model_Ipra::CountPersons(NULL, NULL)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpupersonlist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-01 07:03:26 --- EMERGENCY: ErrorException [ 2 ]: simplexml_load_string(): Entity: line 1: parser error : Start tag expected, '&lt;' not found ~ APPPATH/classes/Model/Ipra.php [ 10 ] in file:line
2016-08-01 07:03:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', '/var/www/msexml...', 10, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(10): simplexml_load_string('%PDF-1.4\n%\xD3\xEB\xE9\xE1\n...', 'SimpleXMLElemen...', 16384)
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(38): Model_Ipra::InsertXML('%PDF-1.4\n%\xD3\xEB\xE9\xE1\n...')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_xmlupload()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2016-08-01 13:14:01 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: ""
LINE 1: ...d" = null OR "med_org_id" = '0' OR "med_org_id" = '' LIMIT 5...
                                                             ^ [ SELECT * FROM "prg0" AS "prg" WHERE "med_org_id" = null OR "med_org_id" = '0' OR "med_org_id" = '' LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-01 13:14:01 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM "...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(284): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(122): Model_Ipra::GetPersonsUnassoc('50', '0')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statipraassoclist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-01 13:14:42 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: ""
LINE 1: ...d" = null OR "med_org_id" = '0' OR "med_org_id" = '' LIMIT 5...
                                                             ^ [ SELECT "id", "med_org_txt", "med_org_id" FROM "prg0" AS "prg" WHERE "med_org_id" = null OR "med_org_id" = '0' OR "med_org_id" = '' LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-01 13:14:42 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "id", "m...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(285): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(122): Model_Ipra::GetPersonsUnassoc('50', '0')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statipraassoclist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-01 13:14:48 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: ""
LINE 1: ...d" = null OR "med_org_id" = '0' OR "med_org_id" = '' LIMIT 5...
                                                             ^ [ SELECT "id", "med_org_txt", "med_org_id" FROM "prg0" AS "prg" WHERE "med_org_id" = null OR "med_org_id" = '0' OR "med_org_id" = '' LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-01 13:14:48 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "id", "m...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(285): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(122): Model_Ipra::GetPersonsUnassoc('50', '0')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statipraassoclist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-01 15:25:18 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: "[object Object]id=1136"
LINE 1: UPDATE "prg0" SET "med_org_id" = '[object Object]id=1136' WH...
                                         ^ [ UPDATE "prg0" SET "med_org_id" = '[object Object]id=1136' WHERE "id" IS NULL ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-01 15:25:18 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE "prg0" S...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(316): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(147): Model_Ipra::AssocPerson(NULL, '[object Object]...')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statipraassoclistcomplete()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-01 15:31:48 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: "11id=1136"
LINE 1: UPDATE "prg0" SET "med_org_id" = '11id=1136' WHERE "id" IS N...
                                         ^ [ UPDATE "prg0" SET "med_org_id" = '11id=1136' WHERE "id" IS NULL ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-01 15:31:48 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE "prg0" S...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(316): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(147): Model_Ipra::AssocPerson(NULL, '11id=1136')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statipraassoclistcomplete()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
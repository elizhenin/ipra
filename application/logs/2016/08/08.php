<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-08 01:13:26 --- EMERGENCY: Database_Exception [ 42703 ]: SQLSTATE[42703]: Undefined column: 7 ERROR:  column "med_org" does not exist
LINE 1: SELECT "med_org" WHERE "id" = '12' LIMIT 1
               ^ [ SELECT "med_org" WHERE "id" = '12' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-08 01:13:26 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT "med_org...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Catalog.php(138): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(327): Model_Catalog::UpdMedOrg(Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorglist()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-08 01:31:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Model/Catalog.php [ 134 ] in /var/www/msexml.lsbr.ru/application/classes/Model/Catalog.php:134
2016-08-08 01:31:19 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Model/Catalog.php(134): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/msexml...', 134, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(327): Model_Catalog::UpdMedOrg(Array)
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorglist()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/msexml.lsbr.ru/application/classes/Model/Catalog.php:134
2016-08-08 01:31:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Model/Catalog.php [ 134 ] in /var/www/msexml.lsbr.ru/application/classes/Model/Catalog.php:134
2016-08-08 01:31:50 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Model/Catalog.php(134): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/msexml...', 134, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(327): Model_Catalog::UpdMedOrg(Array)
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorglist()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/msexml.lsbr.ru/application/classes/Model/Catalog.php:134
2016-08-08 01:31:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Model/Catalog.php [ 134 ] in /var/www/msexml.lsbr.ru/application/classes/Model/Catalog.php:134
2016-08-08 01:31:59 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Model/Catalog.php(134): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/msexml...', 134, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(327): Model_Catalog::UpdMedOrg(Array)
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_medorglist()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/msexml.lsbr.ru/application/classes/Model/Catalog.php:134
2016-08-08 02:24:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/Model/Users.php [ 49 ] in /var/www/msexml.lsbr.ru/application/classes/Model/Users.php:49
2016-08-08 02:24:52 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Model/Users.php(49): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/msexml...', 49, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(234): Model_Users::GetAllUsers('100', '0', NULL, NULL)
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_userlist()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/msexml.lsbr.ru/application/classes/Model/Users.php:49
2016-08-08 02:24:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/Model/Users.php [ 49 ] in /var/www/msexml.lsbr.ru/application/classes/Model/Users.php:49
2016-08-08 02:24:52 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Model/Users.php(49): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/msexml...', 49, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(234): Model_Users::GetAllUsers('100', '0', NULL, NULL)
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_userlist()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/msexml.lsbr.ru/application/classes/Model/Users.php:49
2016-08-08 02:29:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: med_ord_id ~ APPPATH/classes/Model/Ipra.php [ 197 ] in /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php:197
2016-08-08 02:29:29 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(197): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/msexml...', 197, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(57): Model_Ipra::GetPersons('50', '0', NULL, NULL)
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpupersonlist()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php:197
2016-08-08 02:30:18 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 61 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:61
2016-08-08 02:30:18 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(61): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 61, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpupersonlist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:61
2016-08-08 02:39:52 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: ""
LINE 1: ... SET "prgid" = '9292', "typeid" = '2', "evntid" = '', "dicid...
                                                             ^ [ UPDATE "prg0_rhb" AS "prg_rhb" SET "prgid" = '9292', "typeid" = '2', "evntid" = '', "dicid" = '', "tsrid" = '', "name" = '', "dt_exc" = '2016-08-08', "excid" = '', "execut" = 'Департамент здравоохранения Воронежской области                                                                                 ', "resid" = '0', "par1" = '', "par2" = '', "par3" = '', "result" = '', "note" = '', "udt" = '2016-08-02 15:53:53.26603+03' WHERE "prg_rhb"."id" = '10274' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-08 02:39:52 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE "prg0_rh...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(327): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(105): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-08 02:43:05 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: ""
LINE 1: ..." = '2', "evntid" = '0', "dicid" = '0', "tsrid" = '', "name"...
                                                             ^ [ UPDATE "prg0_rhb" AS "prg_rhb" SET "prgid" = '9292', "typeid" = '2', "evntid" = '0', "dicid" = '0', "tsrid" = '', "name" = '', "dt_exc" = '2016-08-11', "excid" = '', "execut" = 'Департамент здравоохранения Воронежской области                                                                                 ', "resid" = '2', "par1" = '', "par2" = '', "par3" = '', "result" = '', "note" = '', "udt" = '2016-08-02 15:53:53.26603+03' WHERE "prg_rhb"."id" = '10274' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-08 02:43:05 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE "prg0_rh...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(327): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(105): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-08 02:59:09 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/Model/Ipra.php [ 331 ] in file:line
2016-08-08 02:59:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-08 03:00:51 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: ""
LINE 1: ... SET "prgid" = '9292', "typeid" = '2', "evntid" = '', "dicid...
                                                             ^ [ UPDATE "prg0_rhb" AS "prg_rhb" SET "prgid" = '9292', "typeid" = '2', "evntid" = '', "dicid" = '', "tsrid" = '', "name" = '', "dt_exc" = '2016-08-10', "excid" = '', "execut" = 'Департамент здравоохранения Воронежской области                                                                                 ', "resid" = '2', "par1" = '', "par2" = '', "par3" = '', "result" = '', "note" = '', "udt" = '2016-08-08 02:59:09.819196+03' WHERE "prg_rhb"."id" = '10274' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-08 03:00:51 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE "prg0_rh...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(330): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(105): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-08 03:04:10 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: ""
LINE 1: ...                         ', "resid" = 2, "par1" = '', "par2"...
                                                             ^ [ UPDATE "prg0_rhb" AS "prg_rhb" SET "prgid" = 9292, "typeid" = 2, "evntid" = 0, "dicid" = 0, "tsrid" = 0, "name" = '', "dt_exc" = '2016-08-10', "excid" = 0, "execut" = 'Департамент здравоохранения Воронежской области                                                                                 ', "resid" = 2, "par1" = '', "par2" = '', "par3" = '', "result" = '', "note" = '', "udt" = '2016-08-08 02:59:09.819196+03' WHERE "prg_rhb"."id" = '10274' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-08 03:04:10 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE "prg0_rh...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(338): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(105): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-08 03:08:21 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: ""
LINE 1: ...                         ', "resid" = 2, "par1" = '', "par2"...
                                                             ^ [ UPDATE "prg0_rhb" SET "prgid" = 9292, "typeid" = 2, "evntid" = 0, "dicid" = 0, "tsrid" = 0, "name" = '', "dt_exc" = '2016-08-10', "excid" = 0, "execut" = 'Департамент здравоохранения Воронежской области                                                                                 ', "resid" = 2, "par1" = '', "par2" = '', "par3" = '', "result" = '', "note" = '', "udt" = '2016-08-08 02:59:09.819196+03' WHERE "id" = '10274' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-08 03:08:21 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE "prg0_rh...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(338): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(105): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-08 03:08:48 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: ""
LINE 1: ...                         ', "resid" = 2, "par1" = '', "par2"...
                                                             ^ [ UPDATE "prg0_rhb" SET "prgid" = 9292, "typeid" = 2, "evntid" = 0, "dicid" = 0, "tsrid" = 0, "name" = '', "dt_exc" = '2016-08-10', "excid" = 0, "execut" = 'Департамент здравоохранения Воронежской области                                                                                 ', "resid" = 2, "par1" = '', "par2" = '', "par3" = '', "result" = '', "note" = '', "udt" = '2016-08-08 02:59:09.819196+03' WHERE "id" = '10274' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-08 03:08:48 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE "prg0_rh...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(339): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(105): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-08 03:09:44 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: ""
LINE 1: ...                         ', "resid" = 2, "par1" = '', "par2"...
                                                             ^ [ UPDATE "prg0_rhb" SET "prgid" = 9292, "typeid" = 2, "evntid" = 0, "dicid" = 0, "tsrid" = 0, "name" = '', "dt_exc" = '2016-08-10', "excid" = 0, "execut" = 'Департамент здравоохранения Воронежской области                                                                                 ', "resid" = 2, "par1" = '', "par2" = '', "par3" = '', "result" = '', "note" = '' WHERE "id" = '10274' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-08 03:09:44 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE "prg0_rh...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(340): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(105): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-08 03:10:12 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: ""
LINE 1: ...                         ', "resid" = 2, "par1" = '', "par2"...
                                                             ^ [ UPDATE "prg0_rhb" SET "prgid" = 9292, "typeid" = 2, "evntid" = 0, "dicid" = 0, "tsrid" = 0, "name" = '', "dt_exc" = '2016-08-10', "excid" = 0, "execut" = 'Департамент здравоохранения Воронежской области                                                                                 ', "resid" = 2, "par1" = '', "par2" = '', "par3" = '', "result" = '', "note" = '' WHERE "id" = '10274' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-08 03:10:12 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE "prg0_rh...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(340): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(105): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-08 03:11:53 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: ""
LINE 1: ...                         ', "resid" = 2, "par1" = '', "par2"...
                                                             ^ [ UPDATE "prg0_rhb" SET "prgid" = 9292, "typeid" = 2, "evntid" = 0, "dicid" = 0, "tsrid" = 0, "name" = '', "dt_exc" = '2016-08-10', "excid" = 0, "execut" = 'Департамент здравоохранения Воронежской области                                                                                 ', "resid" = 2, "par1" = '', "par2" = '', "par3" = '', "result" = '', "note" = '' WHERE "id" = '10274' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-08 03:11:53 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE "prg0_rh...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(341): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(105): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-08 03:14:10 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: ""
LINE 1: ...                         ', "resid" = 2, "par1" = '', "par2"...
                                                             ^ [ UPDATE "prg0_rhb" SET "prgid" = 9292, "typeid" = 2, "evntid" = 0, "dicid" = 0, "tsrid" = 0, "name" = '', "dt_exc" = '2016-08-10', "excid" = 0, "execut" = 'Департамент здравоохранения Воронежской области                                                                                 ', "resid" = 2, "par1" = '', "par2" = '', "par3" = '', "result" = '', "note" = '' WHERE "id" = '10274' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-08 03:14:10 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE "prg0_rh...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(341): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(105): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-08 03:16:26 --- EMERGENCY: Database_Exception [ 22P02 ]: SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: ""
LINE 1: ...                         ', "resid" = 2, "par1" = '', "par2"...
                                                             ^ [ UPDATE "prg0_rhb" SET "prgid" = 9292, "typeid" = 2, "evntid" = 0, "dicid" = 0, "tsrid" = 0, "name" = '', "dt_exc" = '2016-08-10', "excid" = 0, "execut" = 'Департамент здравоохранения Воронежской области                                                                                 ', "resid" = 2, "par1" = '', "par2" = '', "par3" = '', "result" = '', "note" = '' WHERE "id" = 10274 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-08-08 03:16:26 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE "prg0_rh...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Ipra.php(341): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(105): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
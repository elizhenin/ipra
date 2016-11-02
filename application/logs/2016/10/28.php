<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-28 09:08:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/Controller/Ajax.php [ 210 ] in /var/www/ipra/application/classes/Controller/Ajax.php:210
2016-10-28 09:08:24 --- DEBUG: #0 /var/www/ipra/application/classes/Controller/Ajax.php(210): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ipra/a...', 210, Array)
#1 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuoutgoingupdate()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ipra/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/ipra/application/classes/Controller/Ajax.php:210
2016-10-28 12:16:46 --- EMERGENCY: Database_Exception [ 22001 ]: SQLSTATE[22001]: String data, right truncated: 7 ERROR:  value too long for type character(128) [ INSERT INTO "prg0_rhb" ("prgid", "typeid", "evntid", "dicid", "tsrid", "name", "dt_exc", "excid", "execut", "resid", "par1", "par2", "par3", "result", "note", "udt", "approved") VALUES (11206, 2, 2, 0, 0, 'фуразидин 50мг*3р/д  (14 дней), затем 50 мг на ночь -1 мес.; канефрон 1др*3р/д  по 2 мес. с 3х месячным перерывом; пентоксифилин по 1/2*2р/д - 1 месяц в квартал в течение года; эналаприл 2,5 мг*2р/д в теч. года под контролем АД', '2016-10-28', 0, 'Департамент здравоохранения Воронежской области                                                                                 ', 1, 0, 0, 0, '', '', '2016-09-07 19:48:38.188778+03', 'false') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-28 12:16:46 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "pr...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(506): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(152): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-28 12:20:56 --- EMERGENCY: Database_Exception [ 22001 ]: SQLSTATE[22001]: String data, right truncated: 7 ERROR:  value too long for type character(128) [ INSERT INTO "prg0_rhb" ("prgid", "typeid", "evntid", "dicid", "tsrid", "name", "dt_exc", "excid", "execut", "resid", "par1", "par2", "par3", "result", "note", "udt", "approved") VALUES (11206, 2, 2, 0, 0, 'фуразидин 50мг*3р/д - 14 дней, затем 50 мг на ночь - 1 мес.; канефрон 1др*3р/д по 2 мес с 3х мес. перерывами; пентоксифилин по 1/2 *2р/д - 1 мес в квартал; эналаприл 2,5мг*2р/д постоянно под контролем АД', '2016-10-28', 0, 'Департамент здравоохранения Воронежской области                                                                                 ', 1, 0, 0, 0, '', '', '2016-09-07 19:48:38.188778+03', 'false') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-28 12:20:56 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "pr...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(506): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(152): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-26 13:14:50 --- EMERGENCY: Database_Exception [ 22001 ]: SQLSTATE[22001]: String data, right truncated: 7 ERROR:  value too long for type character(128) [ UPDATE "prg0_rhb" SET "typeid" = 2, "evntid" = 2, "dicid" = 0, "name" = 'социально-психологическая,социально-культурная,социально-средовая реабилитация,социально-бытовая адаптация                      ', "dt_exc" = '2016-10-26', "resid" = 0, "par1" = 0, "par2" = 0, "par3" = 0, "result" = 'частично выполнено  стац.лечение с 17,03-25.03.2016г и 29.05.-09.06.2016г  неврологическое отд .ВОДКБ№1,прием пантогама,церетон,кортексин                                                                                        ', "note" = '                                                                ', "udt" = '2016-10-18 15:27:41.169486+03', "approved" = 'false' WHERE "id" = 87153 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-26 13:14:50 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE "prg0_rh...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(528): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(152): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-26 13:24:15 --- EMERGENCY: Database_Exception [ 22001 ]: SQLSTATE[22001]: String data, right truncated: 7 ERROR:  value too long for type character(128) [ INSERT INTO "prg0_rhb" ("prgid", "typeid", "evntid", "dicid", "tsrid", "name", "dt_exc", "excid", "execut", "resid", "par1", "par2", "par3", "result", "note", "udt", "approved") VALUES (11487, 2, 2, 0, 0, '', '2016-10-26', 0, 'Департамент здравоохранения Воронежской области                                                                                 ', 0, 0, 0, 0, 'стац.лечение в г.Борисоглебск с 10,02-04,03,2016г(ишемический инсульт), БУЗ ВО"Грибаноская РБ"С 04,03-10,03,2016-реабилитация медикаментозная', '', '2016-09-07 19:48:38.188778+03', 'false') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-26 13:24:15 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "pr...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(506): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(152): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-26 15:01:50 --- EMERGENCY: Database_Exception [ 23502 ]: SQLSTATE[23502]: Not null violation: 7 ERROR:  null value in column "user_id" violates not-null constraint
DETAIL:  Failing row contains (3544738, null, 2016-10-26 15:01:50.497555, USER_LOGOUT, null, {"client_ip":"10.36.208.49","user_agent":"Mozilla\/5.0 (Windows ...). [ INSERT INTO "sys_log" ("user_id", "type", "table_name", "data") VALUES (NULL, 'USER_LOGOUT', NULL, '{"client_ip":"10.36.208.49","user_agent":"Mozilla\/5.0 (Windows NT 5.1; rv:49.0) Gecko\/20100101 Firefox\/49.0"}') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-10-26 15:01:50 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "sy...', false, Array)
#1 /var/www/ipra/application/classes/Model/Syslog.php(79): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Users.php(32): Model_Syslog::UserLogout(NULL)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Users->action_logout()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
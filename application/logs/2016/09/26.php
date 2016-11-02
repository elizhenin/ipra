<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-09-26 12:50:06 --- EMERGENCY: Database_Exception [ 22007 ]: SQLSTATE[22007]: Invalid datetime format: 7 ERROR:  invalid input syntax for type date: ""
LINE 1: ...                                    ', "dt_exc" = '', "resid...
                                                             ^ [ UPDATE "prg0_rhb" SET "typeid" = 2, "evntid" = 0, "dicid" = 0, "name" = '                                                                               ', "dt_exc" = '', "resid" = 1, "par1" = 0, "par2" = 0, "par3" = 0, "result" = '                                                                                                                                ', "note" = '                                                                ', "udt" = '2016-09-26 12:47:14.935345+03', "approved" = 'false' WHERE "id" = 85231 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-09-26 12:50:06 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE "prg0_rh...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(521): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(148): Model_Ipra::UpdPersonsIpraFull(Array)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
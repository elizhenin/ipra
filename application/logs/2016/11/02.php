<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-11-02 16:18:30 --- EMERGENCY: Database_Exception [ 22021 ]: SQLSTATE[22021]: Character not in repertoire: 7 ERROR:  invalid byte sequence for encoding "UTF8": 0xd0 0x20 [ INSERT INTO "prg0" ("dt", "lname", "fname", "sname", "bdate", "medorgexecutorid", "snils", "okr_id", "nreg", "oivid", "med_org_id") VALUES ('2016-10-25', 'михай', 'лулуди', 'братьяновка', '1958.11.24', 62, 'отсутст� ', 1, 36, 1, 62) ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
2016-11-02 16:18:30 --- DEBUG: #0 /var/www/ipra/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO "pr...', false, Array)
#1 /var/www/ipra/application/classes/Model/Ipra.php(210): Kohana_Database_Query->execute()
#2 /var/www/ipra/application/classes/Controller/Ajax.php(224): Model_Ipra::AddPerson(Array)
#3 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuoutgoingupdate()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ipra/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/ipra/modules/database/classes/Kohana/Database/Query.php:251
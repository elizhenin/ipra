<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-09-13 14:41:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: dt_exc ~ APPPATH/classes/Controller/Ajax.php [ 120 ] in /var/www/ipra/application/classes/Controller/Ajax.php:120
2016-09-13 14:41:31 --- DEBUG: #0 /var/www/ipra/application/classes/Controller/Ajax.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ipra/a...', 120, Array)
#1 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_lpuipraeditformrecord()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ipra/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/ipra/application/classes/Controller/Ajax.php:120
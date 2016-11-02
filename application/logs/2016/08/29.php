<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-29 18:01:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 8 ~ APPPATH/classes/Controller/Stat.php [ 22 ] in /var/www/ipra/application/classes/Controller/Stat.php:22
2016-08-29 18:01:17 --- DEBUG: #0 /var/www/ipra/application/classes/Controller/Stat.php(22): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/ipra/a...', 22, Array)
#1 /var/www/ipra/system/classes/Kohana/Controller.php(84): Controller_Stat->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Stat))
#4 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ipra/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/ipra/application/classes/Controller/Stat.php:22
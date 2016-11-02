<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-26 13:00:29 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host localhost. If you trust localhost, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /var/www/ipra/system/classes/Kohana/URL.php:144
2016-08-26 13:00:29 --- DEBUG: #0 /var/www/ipra/system/classes/Kohana/URL.php(144): Kohana_URL::base(true, false)
#1 /var/www/ipra/system/classes/Kohana/HTTP/Exception/Redirect.php(29): Kohana_URL::site('/users', true, false)
#2 /var/www/ipra/system/classes/Kohana/HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('/users')
#3 /var/www/ipra/system/classes/Kohana/Controller.php(127): Kohana_HTTP::redirect('/users', 302)
#4 /var/www/ipra/application/classes/Controller/Tmp.php(16): Kohana_Controller::redirect('/users')
#5 /var/www/ipra/system/classes/Kohana/Controller.php(69): Controller_Tmp->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lpu))
#8 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/ipra/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/ipra/system/classes/Kohana/URL.php:144
2016-08-26 13:00:29 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host localhost. If you trust localhost, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /var/www/ipra/system/classes/Kohana/URL.php:144
2016-08-26 13:00:29 --- DEBUG: #0 /var/www/ipra/system/classes/Kohana/URL.php(144): Kohana_URL::base(true, false)
#1 /var/www/ipra/system/classes/Kohana/HTTP/Exception/Redirect.php(29): Kohana_URL::site('/users', true, false)
#2 /var/www/ipra/system/classes/Kohana/HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('/users')
#3 /var/www/ipra/system/classes/Kohana/Controller.php(127): Kohana_HTTP::redirect('/users', 302)
#4 /var/www/ipra/application/classes/Controller/Tmp.php(16): Kohana_Controller::redirect('/users')
#5 /var/www/ipra/system/classes/Kohana/Controller.php(69): Controller_Tmp->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/ipra/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lpu))
#8 /var/www/ipra/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/ipra/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/ipra/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/ipra/system/classes/Kohana/URL.php:144
<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-20 15:45:04 --- EMERGENCY: View_Exception [ 0 ]: The requested view template.php could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php:145
2016-07-20 15:45:04 --- DEBUG: #0 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template.php')
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(30): Kohana_View->__construct('template.php', NULL)
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Interface.php(7): Kohana_View::factory('template.php')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Interface->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Interface))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php:145
2016-07-20 15:45:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: topmenu ~ APPPATH/views/template.php [ 48 ] in /var/www/msexml.lsbr.ru/application/views/template.php:48
2016-07-20 15:45:29 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/views/template.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/msexml...', 48, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(62): include('/var/www/msexml...')
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/msexml...', Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/msexml.lsbr.ru/application/classes/Controller/Interface.php(8): Kohana_Response->body(Object(View))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Interface->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Interface))
#9 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/msexml.lsbr.ru/application/views/template.php:48
2016-07-20 16:10:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) ~ APPPATH/classes/Controller/Interface.php [ 18 ] in file:line
2016-07-20 16:10:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-20 16:11:07 --- EMERGENCY: ErrorException [ 8 ]: iconv(): Wrong charset, conversion from `utf-8' to `win-1251' is not allowed ~ APPPATH/classes/Controller/Interface.php [ 13 ] in file:line
2016-07-20 16:11:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'iconv(): Wrong ...', '/var/www/msexml...', 13, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Controller/Interface.php(13): iconv('utf-8', 'win-1251', '\xD0\x92\xD0\xBE\xD0\xB9\xD0\xB4\xD0\xB8\xD1\x82\xD0\xB5 ...')
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(69): Controller_Interface->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Interface))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-07-20 16:11:19 --- EMERGENCY: ErrorException [ 8 ]: iconv(): Wrong charset, conversion from `utf-8' to `cp-1251' is not allowed ~ APPPATH/classes/Controller/Interface.php [ 13 ] in file:line
2016-07-20 16:11:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'iconv(): Wrong ...', '/var/www/msexml...', 13, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Controller/Interface.php(13): iconv('utf-8', 'cp-1251', '\xD0\x92\xD0\xBE\xD0\xB9\xD0\xB4\xD0\xB8\xD1\x82\xD0\xB5 ...')
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(69): Controller_Interface->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Interface))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-07-20 16:11:26 --- EMERGENCY: ErrorException [ 8 ]: iconv(): Wrong charset, conversion from `utf8' to `cp-1251' is not allowed ~ APPPATH/classes/Controller/Interface.php [ 13 ] in file:line
2016-07-20 16:11:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'iconv(): Wrong ...', '/var/www/msexml...', 13, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Controller/Interface.php(13): iconv('utf8', 'cp-1251', '\xD0\x92\xD0\xBE\xD0\xB9\xD0\xB4\xD0\xB8\xD1\x82\xD0\xB5 ...')
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(69): Controller_Interface->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Interface))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-07-20 18:06:41 --- EMERGENCY: ErrorException [ 2 ]: file_put_contents(uploads/google-chrome.desktop): failed to open stream: Отказано в доступе ~ APPPATH/classes/Controller/Ajax.php [ 11 ] in file:line
2016-07-20 18:06:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/var/www/msexml...', 11, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(11): file_put_contents('uploads/google-...', 'IyEvdXNyL2Jpbi9...')
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_xmlupload()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
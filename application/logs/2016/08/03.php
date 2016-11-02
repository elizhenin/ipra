<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-03 02:20:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: rhb_type ~ APPPATH/views/stat/upload/detail.php [ 8 ] in /var/www/msexml.lsbr.ru/application/views/stat/upload/detail.php:8
2016-08-03 02:20:25 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/views/stat/upload/detail.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/msexml...', 8, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(62): include('/var/www/msexml...')
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/msexml...', Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/msexml.lsbr.ru/application/views/template.php(15): Kohana_View->__toString()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(62): include('/var/www/msexml...')
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/msexml...', Array)
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/msexml.lsbr.ru/application/classes/Controller/Tmp.php(64): Kohana_Controller_Template->after()
#9 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(87): Controller_Tmp->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Stat))
#12 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/msexml.lsbr.ru/application/views/stat/upload/detail.php:8
2016-08-03 16:05:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: record ~ APPPATH/classes/Controller/Ajax.php [ 36 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:36
2016-08-03 16:05:11 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(36): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/msexml...', 36, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_xmlupload()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:36
2016-08-03 19:52:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: toolbar_cfg ~ APPPATH/views/stat/upload/index.php [ 4 ] in /var/www/msexml.lsbr.ru/application/views/stat/upload/index.php:4
2016-08-03 19:52:21 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/views/stat/upload/index.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/msexml...', 4, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(62): include('/var/www/msexml...')
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/msexml...', Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/msexml.lsbr.ru/application/views/template.php(15): Kohana_View->__toString()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(62): include('/var/www/msexml...')
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/msexml...', Array)
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/msexml.lsbr.ru/application/classes/Controller/Tmp.php(64): Kohana_Controller_Template->after()
#9 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(87): Controller_Tmp->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Stat))
#12 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/msexml.lsbr.ru/application/views/stat/upload/index.php:4
2016-08-03 20:14:05 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Model/Users.php [ 33 ] in file:line
2016-08-03 20:14:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-03 20:14:05 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Model/Users.php [ 33 ] in file:line
2016-08-03 20:14:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-03 20:14:24 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Model/Users.php [ 33 ] in file:line
2016-08-03 20:14:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-03 20:14:24 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Model/Users.php [ 33 ] in file:line
2016-08-03 20:14:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-03 20:18:41 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 233 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:233
2016-08-03 20:18:41 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(233): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 233, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_userlist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:233
2016-08-03 20:18:41 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 233 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:233
2016-08-03 20:18:41 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(233): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 233, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_userlist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:233
2016-08-03 20:18:48 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 233 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:233
2016-08-03 20:18:48 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(233): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 233, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_userlist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:233
2016-08-03 20:18:49 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 233 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:233
2016-08-03 20:18:49 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(233): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 233, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_userlist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:233
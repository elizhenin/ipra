<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-09 12:05:57 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/stat/journal/index.php [ 111 ] in file:line
2016-08-09 12:05:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-09 12:06:49 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'name' ~ APPPATH/views/stat/journal/index.php [ 63 ] in /var/www/msexml.lsbr.ru/application/views/stat/journal/index.php:63
2016-08-09 12:06:49 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/views/stat/journal/index.php(63): Kohana_Core::error_handler(2, 'Illegal string ...', '/var/www/msexml...', 63, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(62): include('/var/www/msexml...')
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/msexml...', Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/msexml.lsbr.ru/application/views/template.php(15): Kohana_View->__toString()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(62): include('/var/www/msexml...')
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/msexml...', Array)
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/msexml.lsbr.ru/application/classes/Controller/Tmp.php(63): Kohana_Controller_Template->after()
#9 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(87): Controller_Tmp->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Stat))
#12 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/msexml.lsbr.ru/application/views/stat/journal/index.php:63
2016-08-09 12:07:16 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'name' ~ APPPATH/views/stat/journal/index.php [ 63 ] in /var/www/msexml.lsbr.ru/application/views/stat/journal/index.php:63
2016-08-09 12:07:16 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/views/stat/journal/index.php(63): Kohana_Core::error_handler(2, 'Illegal string ...', '/var/www/msexml...', 63, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(62): include('/var/www/msexml...')
#2 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/msexml...', Array)
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/msexml.lsbr.ru/application/views/template.php(15): Kohana_View->__toString()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(62): include('/var/www/msexml...')
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/msexml...', Array)
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/msexml.lsbr.ru/application/classes/Controller/Tmp.php(63): Kohana_Controller_Template->after()
#9 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(87): Controller_Tmp->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Stat))
#12 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/msexml.lsbr.ru/application/views/stat/journal/index.php:63
2016-08-09 14:40:06 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 139 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:139
2016-08-09 14:40:06 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(139): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 139, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statipraassoclist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:139
2016-08-09 14:40:24 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 139 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:139
2016-08-09 14:40:24 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(139): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 139, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statipraassoclist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:139
2016-08-09 14:41:14 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$db' (T_VARIABLE) ~ APPPATH/classes/Model/Ipra.php [ 362 ] in file:line
2016-08-09 14:41:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-09 14:41:27 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 139 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:139
2016-08-09 14:41:27 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(139): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 139, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statipraassoclist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:139
2016-08-09 14:41:34 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 139 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:139
2016-08-09 14:41:34 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(139): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 139, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statipraassoclist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:139
2016-08-09 14:41:52 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 139 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:139
2016-08-09 14:41:52 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(139): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 139, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statipraassoclist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:139
2016-08-09 14:55:19 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 139 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:139
2016-08-09 14:55:19 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(139): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 139, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statipraassoclist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:139
2016-08-09 14:55:47 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 139 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:139
2016-08-09 14:55:47 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(139): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 139, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statipraassoclist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:139
2016-08-09 14:56:04 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 139 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:139
2016-08-09 14:56:04 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(139): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 139, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statipraassoclist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:139
2016-08-09 14:56:08 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 139 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:139
2016-08-09 14:56:08 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(139): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 139, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statipraassoclist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:139
2016-08-09 14:56:31 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 139 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:139
2016-08-09 14:56:31 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(139): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 139, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statipraassoclist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:139
2016-08-09 15:31:34 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 139 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:139
2016-08-09 15:31:34 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(139): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 139, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statipraassoclist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:139
2016-08-09 16:39:55 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 139 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:139
2016-08-09 16:39:55 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(139): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 139, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statipraassoclist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:139
2016-08-09 16:40:30 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 139 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:139
2016-08-09 16:40:30 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(139): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 139, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statipraassoclist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:139
2016-08-09 16:42:07 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 139 ] in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:139
2016-08-09 16:42:07 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php(139): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/msexml...', 139, Array)
#1 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_statipraassoclist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/msexml.lsbr.ru/application/classes/Controller/Ajax.php:139
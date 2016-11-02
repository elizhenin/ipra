<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-04 23:07:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: rhb_type ~ APPPATH/views/admin/user_edit.php [ 8 ] in /var/www/msexml.lsbr.ru/application/views/admin/user_edit.php:8
2016-08-04 23:07:55 --- DEBUG: #0 /var/www/msexml.lsbr.ru/application/views/admin/user_edit.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/msexml...', 8, Array)
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
#11 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/msexml.lsbr.ru/application/views/admin/user_edit.php:8
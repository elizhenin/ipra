<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-21 13:00:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/config/database.php [ 86 ] in file:line
2016-07-21 13:00:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-21 13:02:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Pdo' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2016-07-21 13:02:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-21 13:19:51 --- EMERGENCY: Database_Exception [ 7 ]: SQLSTATE[08006] [7] FATAL:  password authentication failed for user "user"
FATAL:  password authentication failed for user "user" ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/PDO.php:248
2016-07-21 13:19:51 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/PDO.php(248): Kohana_Database_PDO->connect()
#1 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('elizhenin')
#2 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query/Builder.php(116): Kohana_Database->quote('elizhenin')
#3 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query/Builder/Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_PDO), Array)
#4 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_PDO))
#5 /var/www/msexml.lsbr.ru/application/classes/Model/Login.php(14): Kohana_Database_Query->execute()
#6 /var/www/msexml.lsbr.ru/application/classes/Controller/Interface.php(20): Model_Login::checkUser('elizhenin', 'Pass123')
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(69): Controller_Interface->before()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Interface))
#10 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/PDO.php:248
2016-07-21 14:07:45 --- EMERGENCY: Database_Exception [ 7 ]: SQLSTATE[08006] [7] FATAL:  password authentication failed for user "user"
FATAL:  password authentication failed for user "user" ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/PDO.php:248
2016-07-21 14:07:45 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/PDO.php(248): Kohana_Database_PDO->connect()
#1 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('elizhenin')
#2 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query/Builder.php(116): Kohana_Database->quote('elizhenin')
#3 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query/Builder/Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_PDO), Array)
#4 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_PDO))
#5 /var/www/msexml.lsbr.ru/application/classes/Model/Login.php(14): Kohana_Database_Query->execute()
#6 /var/www/msexml.lsbr.ru/application/classes/Controller/Interface.php(20): Model_Login::checkUser('elizhenin', 'Pass123')
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(69): Controller_Interface->before()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Interface))
#10 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/PDO.php:248
2016-07-21 14:27:41 --- EMERGENCY: Database_Exception [ 7 ]: SQLSTATE[08006] [7] FATAL:  password authentication failed for user "user"
FATAL:  password authentication failed for user "user" ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/PDO.php:248
2016-07-21 14:27:41 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/PDO.php(248): Kohana_Database_PDO->connect()
#1 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('elizhenin')
#2 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query/Builder.php(116): Kohana_Database->quote('elizhenin')
#3 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query/Builder/Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_PDO), Array)
#4 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_PDO))
#5 /var/www/msexml.lsbr.ru/application/classes/Model/Login.php(14): Kohana_Database_Query->execute()
#6 /var/www/msexml.lsbr.ru/application/classes/Controller/Interface.php(20): Model_Login::checkUser('elizhenin', 'Pass123')
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(69): Controller_Interface->before()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Interface))
#10 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/PDO.php:248
2016-07-21 14:45:36 --- EMERGENCY: Database_Exception [ 42P01 ]: SQLSTATE[42P01]: Undefined table: 7 ERROR:  relation "users" does not exist
LINE 1: SELECT * FROM "users" WHERE "login" = 'elizhenin' AND "passw...
                      ^ [ SELECT * FROM "users" WHERE "login" = 'elizhenin' AND "password" = '2f23fa3579f3f75175793649115c1b25' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-21 14:45:36 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM "...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Login.php(14): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Interface.php(20): Model_Login::checkUser('elizhenin', 'Pass123')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(69): Controller_Interface->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Interface))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-21 14:59:28 --- EMERGENCY: Database_Exception [ 42501 ]: SQLSTATE[42501]: Insufficient privilege: 7 ERROR:  permission denied for relation users [ SELECT * FROM "users" WHERE "login" = 'elizhenin' AND "password" = '2f23fa3579f3f75175793649115c1b25' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-21 14:59:28 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM "...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Login.php(14): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Interface.php(20): Model_Login::checkUser('elizhenin', 'Pass123')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(69): Controller_Interface->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Interface))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-21 15:07:56 --- EMERGENCY: Database_Exception [ 42501 ]: SQLSTATE[42501]: Insufficient privilege: 7 ERROR:  permission denied for relation users [ SELECT * FROM "users" WHERE "login" = 'elizhenin' AND "password" = '2f23fa3579f3f75175793649115c1b25' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
2016-07-21 15:07:56 --- DEBUG: #0 /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM "...', false, Array)
#1 /var/www/msexml.lsbr.ru/application/classes/Model/Login.php(14): Kohana_Database_Query->execute()
#2 /var/www/msexml.lsbr.ru/application/classes/Controller/Interface.php(20): Model_Login::checkUser('elizhenin', 'Pass123')
#3 /var/www/msexml.lsbr.ru/system/classes/Kohana/Controller.php(69): Controller_Interface->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Interface))
#6 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/msexml.lsbr.ru/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/msexml.lsbr.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/msexml.lsbr.ru/modules/database/classes/Kohana/Database/Query.php:251
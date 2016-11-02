<?php defined('SYSPATH') OR die('No direct access allowed.');
return array
(
    'default' => array(
//    'mysql' => array(
        'type' => 'PDO',
        'connection' => array(
            'dsn' => 'pgsql:host=localhost;dbname=MSE',
            'username' => 'fbmse',
            'password' => 'Pass123',
            'persistent' => FALSE,
        ),
        /**
         * string   identifier  set the escaping identifier
         */
        'table_prefix' => '',
        'charset' => 'utf8',
        'caching' => FALSE,
        'profiling' => TRUE,
        'identifier' => '"'
    ),
    'remote' => array(
        'type' => 'PDO',
        'connection' => array(
            'dsn' => 'pgsql:host=10.36.0.253;dbname=MSE',
            'username' => 'postgres',
            'password' => 'A17Fh14se',
            'persistent' => FALSE,
        ),
        /**
         * string   identifier  set the escaping identifier
         */
        'table_prefix' => '',
        'charset' => 'utf8',
        'caching' => FALSE,
        'profiling' => TRUE,
        'identifier' => '"'
    ),
    'mysql' => array(
//        'default' => array(
        'type' => 'PDO',
        'connection' => array(
            'dsn' => 'mysql:host=localhost;dbname=MSE',
            'username' => 'ipra',
            'password' => 'Pass123',
            'persistent' => FALSE,
        ),
        'table_prefix' => '',
        'charset'      => 'utf8',
        'caching'      => FALSE,
    ),
    'sqlite' =>array(
        'type' => 'PDO',
        'connection' => array(
            'dsn' => 'sqlite:mse.db',
            'username' => '',
            'password' => '',
            'persistent' => FALSE,
        ),
        'table_prefix' => '',
        'charset'      => 'utf8',
        'caching'      => FALSE,
    )
);


/*
return array
(
	'default' => array
	(
		'type'       => 'MySQLi',
		'connection' => array(
			'hostname'   => 'localhost',
			'database'   => 'msexml',
			'username'   => 'msexml',
			'password'   => 'Pass123',
			'persistent' => FALSE,
		),
		'table_prefix' => 'mse_',
		'charset'      => 'utf8',
		'caching'      => FALSE,
	),
	'alternate' => array(
		'type'       => 'PDO',
		'connection' => array(
			'dsn'        => 'mysql:host=localhost;dbname=kohana',
			'username'   => 'root',
			'password'   => 'r00tdb',
			'persistent' => FALSE,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => FALSE,
	),
	/**
	 * MySQLi driver config information
	 *
	 * The following options are available for MySQLi:
	 *
	 * string   hostname     server hostname, or socket
	 * string   database     database name
	 * string   username     database username
	 * string   password     database password
	 * boolean  persistent   use persistent connections?
	 * array    ssl          ssl parameters as "key => value" pairs.
	 *                       Available keys: client_key_path, client_cert_path, ca_cert_path, ca_dir_path, cipher
	 * array    variables    system variables as "key => value" pairs
	 *
	 * Ports and sockets may be appended to the hostname.
	 *
	 * MySQLi driver config example:
	 *
	 */
// 	'alternate_mysqli' => array
// 	(
// 		'type'       => 'MySQLi',
// 		'connection' => array(
// 			'hostname'   => 'localhost',
// 			'database'   => 'kohana',
// 			'username'   => FALSE,
// 			'password'   => FALSE,
// 			'persistent' => FALSE,
// 			'ssl'        => NULL,
// 		),
// 		'table_prefix' => '',
// 		'charset'      => 'utf8',
// 		'caching'      => FALSE,
// 	),
//);

<?php
// MAIN CONFIG
define('DEBUG', true);
define('URL', 'http://localhost/dspf/dspf/public/');

$config['main'] = [
    'default' => 'home'
];

// APP
$config['app'] = [
    'language' => 'en',
    'name' => 'Simple app',
    'description' => 'Testing app with Damn Simple PHP Framework',
    'author' => 'me@filis.me'
];

/**
 *  AVAILABLE DATABASE TYPES
 * -> MySQL         =   mysql
 * -> MariaDB       =   mariadb
 * -> MSSQL         =   mssql
 * -> PostgreSQL    =   pgsql
 * -> Oracle        =   oracle
 * -> Sybase        =   sybase
 * 
 */

$config['db'] = [
    'type' => 'mysql',
    'host' => 'localhost',
    'user' => 'my_user',
    'password' => 'my_pass',
    'charset' => 'utf8'
];
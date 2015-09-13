<?php
// # MAIN CONFIG
define ('DEBUG', true);
define ('URL_PUBLIC_FOLDER', 'public');
define ('URL_PROTOCOL', 'http://');
define ('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define ('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define ('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER . URL_PUBLIC_FOLDER . '/');

// # DATABASE TYPES CONFIG
// -> MySQL         =   mysql
// -> MariaDB       =   mariadb
// -> MSSQL         =   mssql
// -> PostgreSQL    =   pgsql
// -> Oracle        =   oracle
// -> Sybase        =   sybase
define ('DB_TYPE', 'mysql');
define ('DB_HOST', 'localhost');
define ('DB_USER', 'root');
define ('DB_PASSWORD', '123123123');
define ('DB_DATABASE', 'test');
define ('DB_CHARSET', 'utf8');

// # OWN DEFINITIONS
define ('APP_LANGUAGE', 'en');
define ('APP_NAME', 'Damn Simple PHP Framework');
define ('APP_DESCRIPTION', 'Testing Damn Simple PHP Framework');
define ('APP_AUTHOR', 'Filis Futsarov');

if (DEBUG == true) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(-1);
}

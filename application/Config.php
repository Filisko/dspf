<?php
// # MAIN CONFIG
define ('DEBUG', true);
define ('URL_PUBLIC_FOLDER', 'public');
define ('URL_PROTOCOL', 'http://');
define ('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define ('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define ('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);

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

// # YOU CAN USE THIS DEFINITIONS EVERYWHERE YOU WANT (CONTROLLERS, VIEWS, MODELS ...)
define ('APP_NAME', 'Filis\' Framework');
define ('APP_SLOGAN', 'Una página normal y corriente');
define ('APP_DESCRIPTION', 'La descripción de una página normal y corriente.');

if (DEBUG == true) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(-1);
}

<?php
/**
 * Damn Simple PHP Framework
 *
 * @package dspf
 * @author Filisko
 * @link https://github.com/Filisko/dspf
 * @license https://raw.githubusercontent.com/Filisko/dspf/master/LICENSE
 */
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP', ROOT . 'application' . DIRECTORY_SEPARATOR);

session_start();
require_once APP . 'config/web.php';
$GLOBALS['dspf'] = $config;
if (DEBUG == true) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(-1);
} else {
    error_reporting(0);
}

require_once APP . 'core/bootstrap.php';
$bootstrap = Bootstrap::run(new Request());

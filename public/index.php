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

require_once APP . 'config/Config.php';
if (DEBUG == true) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(-1);
}
require_once APP . 'core/Bootstrap.php';
$bootstrap = Bootstrap::run(new Request());

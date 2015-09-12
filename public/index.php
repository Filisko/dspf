<?php
/**
 * Damn Simple PHP Framework
 *
 * @package dspf
 * @author Filisko
 * @link [github]
 * @license [licencia]
 */

define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP', ROOT . 'application' . DIRECTORY_SEPARATOR);

session_start();

require_once APP . 'Config.php';
require_once APP . 'core/Bootstrap.php';
$bootstrap = Bootstrap::run(new Request());

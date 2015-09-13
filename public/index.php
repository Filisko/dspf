<?php
/**
 * Damn Simple PHP Framework
 *
 * @package dspf
 * @author Filis Futsarov
 * @link https://github.com/Filisko/dspf
 * @license https://raw.githubusercontent.com/Filisko/dspf/master/LICENSE
 */

define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP', ROOT . 'application' . DIRECTORY_SEPARATOR);

session_start();

require_once APP . 'config/Config.php';
require_once APP . 'core/Bootstrap.php';
$bootstrap = Bootstrap::run(new Request());

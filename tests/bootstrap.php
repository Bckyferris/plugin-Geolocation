<?php
define('GEOLOCATION_DIR', dirname(dirname(__FILE__)));
$baseBootstrap = dirname(dirname(dirname(dirname(__FILE__)))) . '/application/tests/bootstrap.php';
require_once $baseBootstrap;
require_once 'Geolocation_TestCase.php';
require_once 'Geolocation_ViewTestCase.php';
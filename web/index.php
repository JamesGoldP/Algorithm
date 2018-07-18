<?php
$dir = realpath(__DIR__.'/../App').'/';
define('APP_PATH', $dir);  //define App constant

//load to define constant file
require '../../../Zero/Zero/start.php';
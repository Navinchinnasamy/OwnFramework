<?php

/**
* Get Server Path
*/

if(isset($_SERVER['PATH_INFO'])){
	$path = $_SERVER['PATH_INFO'];
	$split_path = explode('/', ltrim($path));
} else {
	$split_path = "/";
}

if($path == "/"){
	$controller = "IndexController";
	$method = "index";
} else {
	$controller = ucfirst($split_path[1]."Controller");
	$method = !empty($split_path[2]) ? $split_path[2] : "index";
}

require_once (__DIR__).'/config.php';
require_once (__DIR__).'/autoload.php';

$ControllerObj = new $controller();
$ControllerObj->$method();

$params = array_slice($split_path, 3);

?>
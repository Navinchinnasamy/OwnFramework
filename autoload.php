<?php

/* if (file_exists(ROOT_PATH."/Controllers/{$controller}.php"))
{
	loadController($controller);
} else {
	header('HTTP/1.1 404 Not Found');
	die('404 - The file - '.$controller.' - not found');
}

function loadController($class){
	spl_autoload_register(function($class){
		include_once ROOT_PATH."/Controllers/{$class}.php";
	});
} */

spl_autoload_register(function($class){
	if(file_exists(ROOT_PATH."/Controllers/{$class}.php")){
		include_once ROOT_PATH."/Controllers/{$class}.php";
	} else if(file_exists(ROOT_PATH."/Models/{$class}.php")){
		include_once ROOT_PATH."/Models/{$class}.php";
	} else if(file_exists(ROOT_PATH."/Components/{$class}.php")){
		include_once ROOT_PATH."/Components/{$class}.php";
	}  else if(file_exists(ROOT_PATH."/{$class}.php")){
		include_once ROOT_PATH."/{$class}.php";
	} else {
		header('HTTP/1.1 404 Not Found');
		die('404 - The file - '.$class.' - not found');
	}
});
?>
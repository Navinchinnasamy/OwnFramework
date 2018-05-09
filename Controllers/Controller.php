<?php
/**
* Auto-load all the required classes
*/

class IndexController {
	private $model;
	
	function __construct($title) {
		$this->model = new $title;
	}
	
	public function index(){
		return "Index Method";
	}
	
	public function login(){
		return "Login Method";
	}
}
?>
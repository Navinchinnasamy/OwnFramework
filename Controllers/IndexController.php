<?php
/**
* Auto-load all the required classes
*/

use Components\CustomComponent as Custom;

class IndexController {
	private $model;
	
	function __construct() {
		$models = Custom::loadModel('IndexModel');
		$this->model = $models['IndexModel'];
	}
	
	public function index(){
		
		echo "Index Method";
	}
	
	public function showUsers(){
		print_r($this->model->getUsers());
	}

	public function login(){
		return "Login Method";
	}
}
?>
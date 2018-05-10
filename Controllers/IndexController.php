<?php
/**
* Auto-load all the required classes
*/

use Components\CustomComponent as Custom;
use Core\Template as Template;
use Controllers\Controller;

class IndexController extends Controller {
	private $model;
	
	function __construct() {
		parent::__construct();
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
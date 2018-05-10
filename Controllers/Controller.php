<?php
/**
* Auto-load all the required classes
*/
namespace Controllers;

class Controller {
	public static $conn = null;
	public static $session = array();
	public $user = array();
	
	function __construct() {
		session_start();
		
		if(DB_TYPE == "postgres"){
			try {
				$this->conn = new \PDO("pgsql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);
				$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			} catch(\PDOException $e){
				header('HTTP/1.1 404 Not Found');
				die("Connection failed: " . $e);
			}
		} else{
			try {
				$this->conn = new \PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);
				$this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			} catch(\PDOException $e){
				header('HTTP/1.1 404 Not Found');
				die("Connection failed: " . $e->getMessage());
			}
		}
	}
	
	public function getSession(){
		$this->session = isset($_SESSION['alert']) ? $_SESSION['alert'] : array();
	}
	
	public function setSession($values){
		foreach($values as $k => $v){
			$this->session[$k] = $v;
		}
	}
	
	public function getCurrentUser(){
		$this->user = $this->session['user'];
		return $this->user;
	}
	
	protected function clearSession(){
		$this->session = array();
		session_destroy();
	}
}
?>
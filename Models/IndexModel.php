<?php

class IndexModel {
	function __construct(){
		
	}
	
	public function getUsers(){
		$users = [
			["name" => "Williams Isaac", "Phone Number" => "090982xxxxxx"],
			["name" => "Oji Mike", "Phone Number"=> "080982xxxxxx"]
		];
		return json_encode($users);
	}
}
?>
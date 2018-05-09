<?php
namespace Core;

class Template {
	protected $file;
	protected $values = array();
	
	function __construct($file){
		$this->file = $file;
	}
	
	public function set($key, $value) {
		$this->values[$key] = $value;
	}
	
	public function output() {
		if(!file_exists()){
			return "Error loading Template File";
		}
		
		$output = file_get_contents($this->file);
		
		foreach($this->value as $key => $val){
			$tagToReplace = "[@{$key}]";
			$output = str_replace($tagToReplace, $val, $output);
		}
		
		return $output;
	}
}
?>
<?php

namespace Components;

class CustomComponent {
	static function loadModel($models){
		if(!empty($models)){
			$models = explode(',', $models);
			
			foreach($models as $model){
				//CustomComponent::includeModelFile($model);
				$models[$model] = new $model;
			}
			return $models;
		}
	}
}
?>
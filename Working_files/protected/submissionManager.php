<?php 
	function addSubmission($image_id,$value){
		$query="call Submit(:image_id, :value)";
		$params = [
            ':image_id' => $image_id,
            ':value' => $value
        ];
        require_once DATABASE_CONTROLLER;
        return executeDML($query, $params);
	}
?>
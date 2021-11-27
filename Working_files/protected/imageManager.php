<?php
    function getRandomImage() {
        $query = "call GetRandomImage()";

        require_once DATABASE_CONTROLLER;
        $record = getRecord($query);

        if (empty($record)) {
            return false;
        }
        else {
            return $record;
        }
    }
	
?>
<?php

/* Homepage contoller will fetch the list of available services  and store
  then store it in $services variable for the view to use*/

        $heading = "Home";
        require_once "Database.php"; 
       $services = Database::db()->query("select * from services")->fetchAll();   
       require "views/home.view.php";

?>
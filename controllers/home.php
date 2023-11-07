<?php


        $heading = "Home";
        require_once "Database.php"; 
       $services = Database::db()->query("select * from services")->fetchAll();   
       require "views/home.view.php";

?>
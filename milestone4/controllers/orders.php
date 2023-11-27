<?php


$heading = "Orders";
require_once "Database.php"; 

$orders = Database::db()->query("select * from services_history")->fetchAll();   
//var_dump($orders);
require "views/orders.view.php";
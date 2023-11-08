<?php 

$heading = "Our services";
require_once "Database.php"; 
$id = $_GET['id'] ?? 1;
$service_detail = Database::db()->query("select * from service_details where service_id=:id",['id'=>$id])->fetch();   

require "views/services.view.php"


?>
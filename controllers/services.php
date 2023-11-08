<?php 
/*
    Service id will be fetched from the current toute and will be used to
    fetched service detail from the database
*/

$heading = "Our services";
require_once "Database.php"; 
$id = $_GET['id'] ?? 1;
$service_detail = Database::db()->query("select * from service_details where service_id=:id",['id'=>$id])->fetch();   

require "views/services.view.php"


?>
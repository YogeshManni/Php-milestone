<?php 

/*
    A six digit number will be created which is then stored in database as order number, that will
    be used to track the services status.
*/

$heading = "Track services";

$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

$order_number =  substr(str_shuffle($characters), 0, 6);

require_once "Database.php"; 
$query = "Insert into service_status(status, order_number, user_id) values('Service Ordered',:order_number,1)";
try
{
    Database::db()->query($query,['order_number' => $order_number]);   
}
catch(Exception $ex)
{
    echo ''. $ex->getMessage();
}

require "views/tracking.view.php"


?>
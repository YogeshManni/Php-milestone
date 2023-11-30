<?php 

/*
    A six digit number will be created which is then stored in database as order number, that will
    be used to track the services status.
*/

if(!isset($_SESSION['payment']))
{
    
?>
    <script>
        alert("Please complete the payment prior to track your services !!")
        window.location.href='\payment';
    </script>

<?php
   
}

require_once "Database.php"; 
try
{
    $serviceData = $_SESSION['service'];
    $serviceName = $serviceData['service_name'];
    $username = $_SESSION['username'];
    $price = $serviceData['service_price'];
    $date_booked = date('Y-m-d H:i:s');
    $query = "Insert into services_history(service_name, username, price, date_booked) values('$serviceName','$username','$price','$date_booked')";
    Database::db()->query($query);   
}
catch(Exception $ex)
{
    echo ''. $ex->getMessage();
}

$heading = "Track services";

$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

$order_number =  substr(str_shuffle($characters), 0, 6);


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
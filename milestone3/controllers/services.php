<?php 
/*
    Service id will be fetched from the current toute and will be used to
    fetched service detail from the database
*/



/*

stacktrace section 

var_dump(debug_backtrace());
debug_print_backtrace();

array(3) { [0]=> array(3) { ["file"]=> string(51) "C:\xampp\htdocs\Php-milestone\milestone3\router.php" ["line"]=> int(31) ["function"]=> string(7) "require" } [1]=> array(4) { ["file"]=> string(51) "C:\xampp\htdocs\Php-milestone\milestone3\router.php" ["line"]=> int(39) ["function"]=> string(17) "routeToController" ["args"]=> array(2) { [0]=> string(20) "/milestone3/services" [1]=> array(6) { ["/milestone3/"]=> string(21) "controllers/login.php" ["/milestone3/home"]=> string(20) "controllers/home.php" ["/milestone3/register"]=> string(24) "controllers/register.php" ["/milestone3/payment"]=> string(23) "controllers/payment.php" ["/milestone3/services"]=> string(24) "controllers/services.php" ["/milestone3/tracking"]=> string(24) "controllers/tracking.php" } } } [2]=> array(4) { ["file"]=> string(50) "C:\xampp\htdocs\Php-milestone\milestone3\index.php" ["line"]=> int(19) ["args"]=> array(1) { [0]=> string(51) "C:\xampp\htdocs\Php-milestone\milestone3\router.php" } ["function"]=> string(7) "require" } }
 
#0 C:\xampp\htdocs\Php-milestone\milestone3\router.php(31): require() #1 C:\xampp\htdocs\Php-milestone\milestone3\router.php(39): routeToController('/milestone3/ser...', Array) #2 C:\xampp\htdocs\Php-milestone\milestone3\index.php(19): require('C:\\xampp\\htdocs...') 
 
*/



$heading = "Our services";
require_once "Database.php"; 
$id = $_GET['id'] ?? 1;
$service_detail = Database::db()->query("select * from service_details where service_id=:id",['id'=>$id])->fetch();   

require "views/services.view.php"


?>
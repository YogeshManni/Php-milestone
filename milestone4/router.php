<?php



$URI =  parse_url($_SERVER['REQUEST_URI'])['path'];
 

 #echo("<script>console.log('PHP: " . $URI . "');</script>");

 $routes = [

    $proj_root.'/' => "controllers/login.php",
    $proj_root.'/home' => "controllers/home.php",
    $proj_root.'/register' => "controllers/register.php",
    $proj_root.'/payment' => "controllers/payment.php",
    $proj_root.'/services' => "controllers/services.php",
    $proj_root.'/tracking' => "controllers/tracking.php",
    $proj_root.'/orders' => "controllers/orders.php",

 ];

 function abort($errorCode = 404)
 {
    http_response_code($errorCode);  
    require "views/{$errorCode}.php";
 }

function routeToController($URI,$routes)
{
   
    if(array_key_exists($URI,$routes))
    {
        isUserLogined($URI);
        require  $routes[$URI];
    }
    else
    {
         abort(404);
    }   
}

routeToController($URI,$routes);
?>
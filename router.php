<?php

$URI = parse_url($_SERVER['REQUEST_URI'])['path'];
 
 #echo("<script>console.log('PHP: " . $URI . "');</script>");

 $routes = [

    '/' => "controllers/login.php",
    '/home' => "controllers/home.php",
    '/register' => "controllers/register.php",
    '/payment' => "controllers/payment.php",
    '/services' => "controllers/services.php"

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
        require $routes[$URI];
    }
    else
    {
         abort(404);
    }   
}

routeToController($URI,$routes);
?>
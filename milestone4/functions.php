<?php


/****** DECLARE GLOBAL VARIABLES HERE ******************/
 
global $proj_root;
 $proj_root = "/milestone4";

 /****************************************************/
 function urlIs($value)
 {
     
     global $proj_root;
     
     return $_SERVER['REQUEST_URI'] === $proj_root.$value;
 } 

 function getRoot()
 {
     global $proj_root;
     return $proj_root;
 }


  function isUserLogined($URI)
  {
    if(!isset($_SESSION['username'])  && $URI != getRoot().'/' && $URI != getRoot().'/register')
    {
        logout();
    }
  }
        
 function logout()
 {
   // var_dump($_SERVER);
    session_destroy();
    $addr = getRoot() . '/';
    header("Location: $addr");
    exit();
 }
?>
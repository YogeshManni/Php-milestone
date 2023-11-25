<?php

/****** DECLARE GLOBAL VARIABLES HERE ******************/
 
global $proj_root;
 $proj_root = "/milestone3";

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
?>
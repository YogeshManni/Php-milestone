<?php

 global $proj_root;
 $proj_root = "/milestone3";
 function urlIs($value)
 {
     
     global $proj_root;
     
     return $proj_root.$_SERVER['REQUEST_URI'] === $value;
 } 

 function getRoot()
 {
     global $proj_root;
     return $proj_root;
 }
?>
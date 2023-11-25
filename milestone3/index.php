<?php 

/****** REPORTING FOR TEST SERVER ************* 

error_reporting(E_ALL & ~E_NOTICE);
ini_set("display_errors", 1);
ini_set("log_errors", 0);

/*** REPORTING FOR PRODUCTION *******

error_reporting(E_ALL & ~E_NOTICE);
ini_set("display_errors", 0);
ini_set("log_errors", 1);
ini_set("error_log", __DIR__ . DIRECTORY_SEPARATOR . "error.log"); // LOG FILE

**************************************/
 require "functions.php";
 require "Database.php";
  require "router.php";

?>
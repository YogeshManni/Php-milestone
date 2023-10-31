<?php 
 require "functions.php";
 require "Database.php";
 //require "router.php";
$config = require('config.php');

$db = new Database($config,'root',$config['password']);


$note =$db->query("select * from users")->fetchAll();

var_dump($note);


?>
<?php 


if (isset($_REQUEST['username']))
{
    require "../Database.php"; 
    $heading = "Register";
    $user = $_REQUEST;
    $query = "INSERT INTO users (username, email, password)
     VALUES ('{$user['username']}','{$user['email']}','{$user['password']}')";
             
    $note = Database::db()->query($query);
    var_dump($note);
}
else
{

require "views/register.view.php";
}


?>
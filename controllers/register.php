<?php 
 $heading = "Register";

 /*
    Regitser Page will check the request method , if its post then user data will be stored in database
    otherwise simply view will be returned
 */

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_REQUEST['username']))
{

    require_once "Database.php"; 
    $errors = null;
    $success = null;
    $user = $_REQUEST;
    $checkUser =  "select * from users where email = :email";   
    $res = Database::db()->query($checkUser,["email" => $_REQUEST['email']])->fetch();   
    if($res == false)
    {
        $query = "INSERT INTO users (username, email, password) VALUES ('{$user['username']}','{$user['email']}','{$user['password']}')";
        try
        {
            $res = Database::db()->query($query);
            $success = "User successfully registered, please proceed to login!!";
        }
        catch (Exception $e)
        {
            $errors = "Error occured, please try again!!";
        }
    }
    else
    {
            $errors = "Email already exists, please login or use different email!!";
    }
  
    
}


require("views/register.view.php");


?>
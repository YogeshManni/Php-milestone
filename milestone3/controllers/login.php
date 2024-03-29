<?php
 $heading = "Login";
 
 /*
    Login Page will check the request method , if its post then user credentials will be verified 
    otherwise simply view will be returned
 */
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_REQUEST['email']))
{
      require_once "Database.php";  
      $user = $_REQUEST;
      $errors = null;
      $query = "select * from users where email = :email";         
      $res = Database::db()->query($query,["email" => $_REQUEST['email']])->fetch();
        
      if($res == false)
      {
        error_log("User email not found, please check again or register a new account !!");
        $errors = "User email not found, please check again or register a new account !!";
      }
      else if($res['password'] == $_REQUEST['password'])
        {
                header("Location:$_SERVER[HTTP_REFERER]home");
        }
        else
        {
                $errors = "Password Incorrect, please try again !!";
       }
        
}
      require("views/login.view.php");

?>

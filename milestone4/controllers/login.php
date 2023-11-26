<?php
 $heading = "Login";
 
 /*
    Login Page will check the request method , if its post then user credentials will be verified 
    otherwise simply view will be returned
 */
$res = null;

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
      
      $_SESSION['username'] = $res['username'] ?? null;
     
      require("views/login.view.php");

?>

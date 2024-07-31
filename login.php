<?php
include "conn.php";
session_start();
if(isset($_REQUEST['submit']))
{
  $username = $_POST["email"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM users WHERE email='$username' AND password='$password'";
  $result = $con->query($sql);

  if ($result->num_rows == 1) {

    if ($username == "main123@gmail.com" && $password == "1506") {
      $_SESSION["username"] = $username;
      header("Location: admin.html");
      exit();
    }
    else{
      $_SESSION["username"] = $username;
        header('Location: welcomeuser.php');
        }
  } 
  else {
    

echo '<script type="text/javascript">';
echo ' alert("User_name Or Password are Invalid")';  //not showing an alert box.
echo '</script>';
readfile("login.html");


    
  }
}

?>

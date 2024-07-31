<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "conn.php";

if(isset($_REQUEST['submit']))
{
        $name=$_REQUEST["name"];
        $card=$_REQUEST["card"];
        $ex=$_REQUEST["expiry"];
        $cvv=$_REQUEST["cvv"];


         $email = $_REQUEST["email"];


 

    $qry="insert into pay (name,email,card,expiry,cvv) values('$name','$email','$card','$ex','$cvv')";
    $ins=mysqli_query($con,$qry);

  if($ins)
  {
      
  echo '<script type="text/javascript">';
  echo ' alert("..DATA ARE SAVED SUCCESSFULLY..")';  //not showing an alert box.
  echo '</script>';

  header("location:status.html");
  }
  else
  {	
      
  echo '<script type="text/javascript">';
  echo ' alert("..SOMETHING WENT WRONG..")';  //not showing an alert box.
  echo '</script>';
  header("location:pay.html");
  }
}

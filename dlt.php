<?php
include "conn.php";
if(isset($_GET['id']))
{
  $id = $_GET["id"];

  $sql = "delete from contect where id='$id'";
  $result = $con->query($sql);

  
    

echo '<script type="text/javascript">';
echo ' alert("Delete Success")';  //not showing an alert box.
echo '</script>';
header("location:contect_data.php");


    
  }


?>

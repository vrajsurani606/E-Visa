<?php
include "conn.php";

if(isset($_POST['submit']))
{

    
    $email = $_POST["email"];
    $c=$_POST["country"];
    $visaType = $_POST["visaType"];
    $file_name=$_FILES["passport"]["name"];
    $tempname=$_FILES["passport"]["tmp_name"];
    $folder="applyer/".$file_name;

    $file_name2=$_FILES["photo"]["name"];
    $tempname2=$_FILES["photo"]["tmp_name"];
    $folder2="applyer/".$file_name2;



    $all="select * from applyer WHERE email='$email'";
    $result = $con->query($all);



    if ($result->num_rows == 1) {
               
                echo '<script type="text/javascript">';
                echo ' alert("... Your Data Are Under The Process ...")';  //not showing an alert box.
                echo '</script>';
               echo' <div class="alert alert-danger" role="alert">';
                 echo 'This is a dark alert—check it out!';
                  echo   '</div>';
                header("location:apply.php"); 
                
                
                
    } 
    else { 
    
        $sql="insert into applyer (email,passport,photo,visa,country) values ('$email','$file_name','$file_name2','$visaType','$c')";
        mysqli_query($con, $sql);
        echo "<script>alert('successfully...');</script>";
        if (move_uploaded_file($tempname,$folder) && move_uploaded_file($tempname2,$folder2)) {
            header("location:apply.php");
            echo '<script type="text/javascript">';
                echo ' alert("... Data Are Saved Succussfully ...")';  //not showing an alert box.
                echo '</script>';
               
        } else {
            readfile("apply.php");
            echo '<script type="text/javascript">';
            echo ' alert("... Something Went Wrong ...")';  //not showing an alert box.
            echo '</script>';
            
        }
	}
	
} 
?>


<?php

include "conn.php";
if(isset($_REQUEST['submit']))
{
    $f_name=$_REQUEST['f_name'];  
    $l_name=$_REQUEST['l_name'];
    $birthdate=$_REQUEST['birthdate'];
    $email=$_REQUEST['email'];
     $phone=$_REQUEST['phone'];
     $passno=$_REQUEST['passno'];
     $Aadharno=$_REQUEST['Aadharno'];
     
    
     $qry="insert into p_detail(f_name,l_name,birthdate,email,phone,passno,Aadharno) values('$f_name','$l_name','$birthdate','$email','$phone','$passno','$Aadharno')";
	    $ins=mysqli_query($con,$qry);
	if($ins)
	{
		
    echo '<script type="text/javascript">';
    echo ' alert("..DATA ARE SAVED SUCCESSFULLY..")';  //not showing an alert box.
    echo '</script>';

    header("location: personaldetail.php");
	}
	else
	{	
		
    echo '<script type="text/javascript">';
    echo ' alert("..SOMETHING WENT WRONG..")';  //not showing an alert box.
    echo '</script>';
    header("location: personaldetail.php");
	}
}


if(isset($_REQUEST['edit']))
{
    $f_name=$_REQUEST['f_name'];  
    $l_name=$_REQUEST['l_name'];
    $birthdate=$_REQUEST['birthdate'];
    $email=$_REQUEST['email'];
     $phone=$_REQUEST['phone'];
     $passno=$_REQUEST['passno'];
     $Aadharno=$_REQUEST['Aadharno'];
     
    
     $qry = "UPDATE p_detail 
     SET f_name='" . $f_name . "', 
         l_name='" . $l_name . "', 
         birthdate='" . $birthdate . "', 
         phone='" . $phone . "', 
         passno='" . $passno . "', 
         Aadharno='" . $Aadharno . "' 
     WHERE email='" . $email . "'";

    
     $ins=mysqli_query($con,$qry);
	if($ins)
	{
		
        echo '<script type="text/javascript">';
                echo ' alert("..DATA ARE SAVED SUCCESSFULLY..")';  //not showing an alert box.
         echo '</script>';

    header("location: personaldetail.php");
	}
	else
	{	
		
    echo '<script type="text/javascript">';
    echo ' alert("..SOMETHING WENT WRONG..")';  //not showing an alert box.
    echo '</script>';
    header("location: personaldetail.php");
	}
}




?>


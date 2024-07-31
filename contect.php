<?php

include "conn.php";
if(isset($_REQUEST['submit']))
{
    $name=$_REQUEST['name'];
	echo $name;
    $email=$_REQUEST['email'];
     $sub=$_REQUEST['sub'];
    $msg =$_REQUEST['msg'];
    $qry="insert into contect(name,email,sub,msg) values('$name','$email','$sub','$msg')";
	$ins=mysqli_query($con,$qry);
	if($ins)
	{
		echo '<script type="text/javascript">';
echo ' alert("... Thank You Our Team is Contact You ...")';  //not showing an alert box.
echo '</script>';
		header("location:contact.html");
	}
	else
	{	echo '<script type="text/javascript">';
		echo ' alert("... Something Worng ...")';  //not showing an alert box.
		echo '</script>';
		header("location:contact.html");
	}
}

?>
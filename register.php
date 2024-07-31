


<?php

include "conn.php";
if(isset($_REQUEST['submit']))
{
      $name=$_REQUEST['full_name'];

      $email=$_REQUEST['email'];
     $sub=$_REQUEST['password'];

    $all="select * from users WHERE email='$email'";
    $result = $con->query($all);



    if ($result->num_rows == 1) {
       
        echo '<script type="text/javascript">';
echo ' alert("... Email Are Already Exist Please Enter Another Email ...")';  //not showing an alert box.
echo '</script>';
readfile("login.html");
              } 
      else {
        
    
        $qry="insert into users(full_name,email,password) values('$name','$email','$sub')";
	    $ins=mysqli_query($con,$qry);
	if($ins)
	{
		
    echo '<script type="text/javascript">';
    echo ' alert("..DATA ARE SAVED SUCCESSFULLY..")';  //not showing an alert box.
    echo '</script>';

    readfile("login.html");
	}
	else
	{	
		
    echo '<script type="text/javascript">';
    echo ' alert("..SOMETHING WENT WRONG..")';  //not showing an alert box.
    echo '</script>';
    readfile("register.html");
	}
} 
    
        
      }






     

?>

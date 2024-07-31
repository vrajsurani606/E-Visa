 <?php
                                   
                                        include "conn.php";
                                        
                                                

$sts=$_GET['st'];
$em=$_GET['email'];
    echo $sts;
   $sql="update p_detail set status='$sts' where email='$em' ";
    
    $ins = mysqli_query($con, $sql);

    if($ins)
    {
        if($sts=='accept')
        {
           
        }
        if($sts=='reject')
        {
            
        echo    "<script>alert('data rejected successfully')</script>";
        

        }
        header("Location: p_detail.php");
        ?>
            
        <?php
    }
  
?>
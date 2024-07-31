


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.jpg">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <link href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">

    <title>E-Visa ~ Vraj</title>
</head>

<body>       
           
           <?php
            include "conn.php";
            $p_page=5;
            $start=0;
            $current=1;

            if(isset($_GET['start']))
            {
                $start=$_GET['start'];
                if($start<=0){
                    $start=0;
                    $current=1;

                }
                else{
                    $current=$start;
                    $start--;
                    $start=$start * $p_page;


                }

            }
            $record=mysqli_num_rows(mysqli_query($con , "Select full_name,email from users"));
            $pagi=ceil($record/$p_page);
            
          $sql="select full_name,email from users limit $start,$p_page";
            $res=mysqli_query($con,$sql);
            ?>







<table class="table table-hover"  ><thead><tr><th>Name</th><th>Mail</th></thead></tr>

            <?php
if (mysqli_num_rows($res)>0){
    while($row=mysqli_fetch_assoc($res)){
        echo "<tr><td> $row[full_name]</td><td> $row[email]</td></tr>";
        
    }
 } else {
        echo "0 results";
    } ?>
    
    
<ul class="pagination mt-300">

    
<?php

for($i=1; $i<=$pagi; $i++)
{
    $class="";
   



if($current==$i)
{
    ?>
    <li class="page-item active"><a class="page-link" href="?start=<?php echo $i ?>"><?php echo $i ?> </a> </li>
    
    <?php
}
else{
?> <li class="page-item"><a class="page-link" href="?start=<?php echo $i ?>"><?php echo $i ?> </a> </li>
<?php
}

?>
<?php } 
?></table>

    


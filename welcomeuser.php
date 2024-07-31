<?php 
session_start();

include "conn.php";
$sql = "SELECT * FROM users WHERE  email='{$_SESSION['username']}' ";
$rs=mysqli_query($con,$sql);
$res=mysqli_fetch_assoc($rs);

?>

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

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>



    <nav class="site-nav mb-5">
        <div class="pb-2 top-bar mb-3">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-6 col-lg-9">
                        <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> <span class="d-none d-lg-inline-block">Have a questions?</span></a>
                        <a href="#" class="small mr-3"><span class="icon-phone mr-2"></span> <span class="d-none d-lg-inline-block">(+91) 9724085965</span></a>
                        <a href="#" class="small mr-3"><span class="icon-envelope mr-2"></span> <span class="d-none d-lg-inline-block">vrajsurani606@gmail.com</span></a>
                    </div>


                </div>
            </div>
        </div>
        <div class="sticky-nav js-sticky-header">
            <div class="container position-relative">
                <div class="site-navigation text-center">
                    <a href="index.html" class="logo menu-absolute m-0">E-Visa<span class="text-primary"><i class="fa fa-refresh" aria-hidden="true"></i></span></a>

                    <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
                        <li><a href="apply.php">Apply</a></li>
                        <li><a href="status.html">View Status</a></li>
                        <li ><a href="personaldetail.php">Personal details</a></li>
                        <li><a href="pay.html">Payment</a></li>
                        <li><a href="dowonload.php">Dowonlod E ~ Visa</a></li>


                    </ul>

                    <a href="profile.php" class="btn-book btn btn-secondary btn-sm menu-absolute"><span class="icon-user-o">  USER</span></a>

                    <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>

                </div>
            </div>
        </div>
    </nav>



    <div class="untree_co-hero overlay" style="background-image: url('images/f1.jpg');">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12">
                    <div class="row justify-content-center ">
                        <div class="col-lg-6 text-center ">
                            <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Welcome <?php echo $res['full_name'];?></h1>
                            <div class="mb-5 text-white desc mx-auto" data-aos="fade-up" data-aos-delay="200">
                                <p><?php echo $res['email'];?></p>
                            </div>


                        </div>


                    </div>

                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->

    </div>
    <!-- /.untree_co-hero -->



    <div class="site-footer ">


        <div class="container ">

            <div class="row ">
                <div class="col-lg-3 mr-auto ">
                    <div class="widget ">
                        <h3>About Us<span class="text-primary ">.</span> </h3>
                        <p>E-Visa is a system developed with the aim of saving passengers from long-term and tiring bureaucratic procedures, as well as creating an alternative to visas issued at the borders. Online users can apply for visas online to the
                            countries they wish to visit.</p>
                    </div>
                    <!-- /.widget -->
                    <div class="widget ">
                        <h3>Connect</h3>
                        <ul class="list-unstyled social ">
                            <li><a href=" # "><span class="icon-instagram "></span></a></li>
                            <li><a href="# "><span class="icon-twitter "></span></a></li>
                            <li><a href="# "><span class="icon-facebook "></span></a></li>
                            <li><a href="# "><span class="icon-linkedin "></span></a></li>
                            <li><a href="# "><span class="icon-pinterest "></span></a></li>
                            <li><a href="# "><span class="icon-dribbble "></span></a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /.col-lg-3 -->

                <div class="col-lg-2 ml-auto ">
                    <div class="widget ">
                        <h3>Visa Available For </h3>
                        <ul class="list-unstyled float-left links ">
                            <li><a href="# ">Student Visa</a></li>
                            <li><a href="# ">Business Visa</a></li>
                            <li><a href="# ">Tourist Visa</a></li>
                            <li><a href="# ">Work Visa</a></li>
                            <li><a href="# ">Invester Visa</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /.col-lg-3 -->

                <div class="col-lg-3 ">
                    <div class="widget ">
                        <h3>Example Of Visa</h3>
                        <ul class="instafeed instagram-gallery list-unstyled ">
                            <li>
                                <a class="instagram-item " href="foter/p1.png " data-fancybox="gal "><img src="foter/p1.png " alt=" " width="72 " height="72 "></a>
                            </li>
                            <li>
                                <a class="instagram-item " href="foter/p2.jpg " data-fancybox="gal "><img src="foter/p2.jpg " alt=" " width="72 " height="72 "></a>
                            </li>
                            <li>
                                <a class="instagram-item " href="foter/p3.jpg " data-fancybox="gal "><img src="foter/p3.jpg " alt=" " width="72 " height="72 "></a>
                            </li>
                            <li>
                                <a class="instagram-item " href="foter/p4.jpg " data-fancybox="gal "><img src="foter/p4.jpg " alt=" " width="72 " height="72 "></a>
                            </li>
                            <li>
                                <a class="instagram-item " href="foter/p5.jpg " data-fancybox="gal "><img src="foter/p5.jpg " alt=" " width="72 " height="72 "></a>
                            </li>
                            <li>
                                <a class="instagram-item " href="foter/p6.jpg " data-fancybox="gal "><img src="foter/p6.jpg " alt=" " width="72 " height="72 "></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /.col-lg-3 -->


                <div class="col-lg-3 ">
                    <div class="widget ">
                        <h3>Contact</h3>
                        <address>Shree ShambhuBhai V Patel Collage Of Bussiness Menagement & Computer Science</address>
                        <ul class="list-unstyled links mb-4 ">
                            <li><a href="tel://9724085965 ">+91-9724085965</a></li>
                            <li><a href="tel://02614567890 ">+91(0261)-456-7890</a></li>
                            <li><a href="mailto:Vrajsurani606@gmail.com ">vrajsurani606@gmail.com</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /.col-lg-3 -->

            </div>
            <!-- /.row -->

            <div class="row mt-5 ">
                <div class="col-12 text-center ">
                    <p>Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>. All Rights Reserved. &mdash; Distributed By Vraj_Surani</a>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.site-footer -->

    <div id="overlayer "></div>
    <div class="loader ">
        <div class="spinner-border " role="status ">
            <span class="sr-only ">Loading...</span>
        </div>
    </div>

    <script src="js/jquery-3.4.1.min.js "></script>
    <script src="js/popper.min.js "></script>
    <script src="js/bootstrap.min.js "></script>
    <script src="js/owl.carousel.min.js "></script>
    <script src="js/jquery.animateNumber.min.js "></script>
    <script src="js/jquery.waypoints.min.js "></script>
    <script src="js/jquery.fancybox.min.js "></script>
    <script src="js/jquery.sticky.js "></script>
    <script src="js/aos.js "></script>
    <script src="js/custom.js "></script>

</body>

</html>
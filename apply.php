<?php
include "conn.php";
session_start();
$sql="select * from users where email='{$_SESSION['username']}'";

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
    <script>
        function myfunction(){
            alert("apply successfully....");
        }
    </script>
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
                        <li><a href="dowonload">Dowonlod E ~ Visa</a></li>


                    </ul>

                    <a href="profile.php" class="btn-book btn btn-secondary btn-sm menu-absolute"><span class="icon-user-o">  USER</span></a>

                    <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>

                </div>
            </div>
        </div>
    </nav>


    <div class="untree_co-hero inner-page overlay" style="background-image: url('/images/visa4.jpg');">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12">
                    <div class="row justify-content-center ">
                        <div class="col-lg-6 text-center ">
                            <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100" class="active">Apply For Visa Application</h1>
                            <h4 class="mb-1 text-white" data-aos="fade-up" data-aos-delay="100" class="active">The Indian Visa Councile</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->

    </div>
    <!-- /.untree_co-hero -->




    <div class="untree_co-section">
        <div class="container">

            <div class="row mb-5 justify-content-center">
                <div class="col-lg-5 mx-auto order-1" data-aos="fade-up" data-aos-delay="200">

                    <form action="upload.php" class="form-box" method="post" enctype="multipart/form-data">
                        <div class="row">


                            <div class="col-12 mb-3">
                                <input type="email " class="form-control" name="email" placeholder="Email" value="<?php echo  $res['email'];?>" required>Your email</input>
                            </div>
                            <div class="col-12 mb-3">
                                <input type="file" class="form-control" name="passport" placeholder="PASSPORT" required>Uplod Your Passport 1st page photo</input>
                            </div>
                            <div class="col-12 mb-3">
                                <input type="file" class="form-control" name="photo" placeholder="YOUR PHOTO">Uplod Your Passport Size Clear photo</input>
                            </div>


                            <div class="col-12 mb-3">
                            <select name="country" class="form-control" required>
                            <option value="" disabled selected>... Choose The Country You Want To Go ...</option>
                          
 
    <option value="AF">Afghanistan</option>
    <option value="AX">Aland Islands</option>
    <option value="AL">Albania</option>
    <option value="DZ">Algeria</option>
    <option value="AS">American Samoa</option>
    <option value="AD">Andorra</option>
    <option value="AO">Angola</option>
    <option value="AI">Anguilla</option>
    <option value="AQ">Antarctica</option>
    <option value="AG">Antigua and Barbuda</option>
    <option value="AR">Argentina</option>
    <option value="AM">Armenia</option>
    <option value="AW">Aruba</option>
    <option value="AU">Australia</option>
    <option value="AT">Austria</option>
    <option value="AZ">Azerbaijan</option>
    <option value="BS">Bahamas</option>
    <option value="BH">Bahrain</option>
    <option value="BD">Bangladesh</option>
    <option value="BB">Barbados</option>
    <option value="BY">Belarus</option>
    <option value="BE">Belgium</option>
    <option value="BZ">Belize</option>
    <option value="BJ">Benin</option>
    <option value="BM">Bermuda</option>
    <option value="BT">Bhutan</option>
    <option value="BO">Bolivia</option>
    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
    <option value="BA">Bosnia and Herzegovina</option>
    <option value="BW">Botswana</option>
    <option value="BV">Bouvet Island</option>
    <option value="BR">Brazil</option>
    <option value="IO">British Indian Ocean Territory</option>
    <option value="BN">Brunei Darussalam</option>
    <option value="BG">Bulgaria</option>
    <option value="BF">Burkina Faso</option>
    <option value="BI">Burundi</option>
    <option value="KH">Cambodia</option>
    <option value="CM">Cameroon</option>
    <option value="CA">Canada</option>
    <option value="CV">Cape Verde</option>
    <option value="KY">Cayman Islands</option>
    <option value="CF">Central African Republic</option>
    <option value="TD">Chad</option>
    <option value="CL">Chile</option>
    <option value="CN">China</option>
    <option value="CX">Christmas Island</option>
    <option value="CC">Cocos (Keeling) Islands</option>
    <option value="CO">Colombia</option>
    <option value="KM">Comoros</option>
    <option value="CG">Congo</option>
    <option value="CD">Congo, Democratic Republic of the Congo</option>
    <option value="CK">Cook Islands</option>
    <option value="CR">Costa Rica</option>
    <option value="CI">Cote D'Ivoire</option>
    <option value="HR">Croatia</option>
    <option value="CU">Cuba</option>
    <option value="CW">Curacao</option>
    <option value="CY">Cyprus</option>
    <option value="CZ">Czech Republic</option>
    <option value="DK">Denmark</option>
    <option value="DJ">Djibouti</option>
    <option value="DM">Dominica</option>
    <option value="DO">Dominican Republic</option>
    <option value="EC">Ecuador</option>
    <option value="EG">Egypt</option>
    <option value="SV">El Salvador</option>
    <option value="GQ">Equatorial Guinea</option>
    <option value="ER">Eritrea</option>
    <option value="EE">Estonia</option>
    <option value="ET">Ethiopia</option>
    <option value="FK">Falkland Islands (Malvinas)</option>
    <option value="FO">Faroe Islands</option>
    <option value="FJ">Fiji</option>
    <option value="FI">Finland</option>
    <option value="FR">France</option>
    <option value="GF">French Guiana</option>
    <option value="PF">French Polynesia</option>
    <option value="TF">French Southern Territories</option>
    <option value="GA">Gabon</option>
    <option value="GM">Gambia</option>
    <option value="GE">Georgia</option>
    <option value="DE">Germany</option>
    <option value="GH">Ghana</option>
    <option value="GI">Gibraltar</option>
    <option value="GR">Greece</option>
    <option value="GL">Greenland</option>
    <option value="GD">Grenada</option>
    <option value="GP">Guadeloupe</option>
    <option value="GU">Guam</option>
    <option value="GT">Guatemala</option>
    <option value="GG">Guernsey</option>
    <option value="GN">Guinea</option>
    <option value="GW">Guinea-Bissau</option>
    <option value="GY">Guyana</option>
    <option value="HT">Haiti</option>
    <option value="HM">Heard Island and Mcdonald Islands</option>
    <option value="VA">Holy See (Vatican City State)</option>
    <option value="HN">Honduras</option>
    <option value="HK">Hong Kong</option>
    <option value="HU">Hungary</option>
    <option value="IS">Iceland</option>
    <option value="IN">India</option>
    <option value="ID">Indonesia</option>
    <option value="IR">Iran, Islamic Republic of</option>
    <option value="IQ">Iraq</option>
    <option value="IE">Ireland</option>
    <option value="IM">Isle of Man</option>
    <option value="IL">Israel</option>
    <option value="IT">Italy</option>
    <option value="JM">Jamaica</option>
    <option value="JP">Japan</option>
    <option value="JE">Jersey</option>
    <option value="JO">Jordan</option>
    <option value="KZ">Kazakhstan</option>
    <option value="KE">Kenya</option>
    <option value="KI">Kiribati</option>
    <option value="KP">Korea, Democratic People's Republic of</option>
    <option value="KR">Korea, Republic of</option>
    <option value="XK">Kosovo</option>
    <option value="KW">Kuwait</option>
    <option value="KG">Kyrgyzstan</option>
    <option value="LA">Lao People's Democratic Republic</option>
    <option value="LV">Latvia</option>
    <option value="LB">Lebanon</option>
    <option value="LS">Lesotho</option>
    <option value="LR">Liberia</option>
    <option value="LY">Libyan Arab Jamahiriya</option>
    <option value="LI">Liechtenstein</option>
    <option value="LT">Lithuania</option>
    <option value="LU">Luxembourg</option>
    <option value="MO">Macao</option>
    <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
    <option value="MG">Madagascar</option>
    <option value="MW">Malawi</option>
    <option value="MY">Malaysia</option>
    <option value="MV">Maldives</option>
    <option value="ML">Mali</option>
    <option value="MT">Malta</option>
    <option value="MH">Marshall Islands</option>
    <option value="MQ">Martinique</option>
    <option value="MR">Mauritania</option>
    <option value="MU">Mauritius</option>
    <option value="YT">Mayotte</option>
    <option value="MX">Mexico</option>
    <option value="FM">Micronesia, Federated States of</option>
    <option value="MD">Moldova, Republic of</option>
    <option value="MC">Monaco</option>
    <option value="MN">Mongolia</option>
    <option value="ME">Montenegro</option>
    <option value="MS">Montserrat</option>
    <option value="MA">Morocco</option>
    <option value="MZ">Mozambique</option>
    <option value="MM">Myanmar</option>
    <option value="NA">Namibia</option>
    <option value="NR">Nauru</option>
    <option value="NP">Nepal</option>
    <option value="NL">Netherlands</option>
    <option value="AN">Netherlands Antilles</option>
    <option value="NC">New Caledonia</option>
    <option value="NZ">New Zealand</option>
    <option value="NI">Nicaragua</option>
    <option value="NE">Niger</option>
    <option value="NG">Nigeria</option>
    <option value="NU">Niue</option>
    <option value="NF">Norfolk Island</option>
    <option value="MP">Northern Mariana Islands</option>
    <option value="NO">Norway</option>
    <option value="OM">Oman</option>
    <option value="PK">Pakistan</option>
    <option value="PW">Palau</option>
    <option value="PS">Palestinian Territory, Occupied</option>
    <option value="PA">Panama</option>
    <option value="PG">Papua New Guinea</option>
    <option value="PY">Paraguay</option>
    <option value="PE">Peru</option>
    <option value="PH">Philippines</option>
    <option value="PN">Pitcairn</option>
    <option value="PL">Poland</option>
    <option value="PT">Portugal</option>
    <option value="PR">Puerto Rico</option>
    <option value="QA">Qatar</option>
    <option value="RE">Reunion</option>
    <option value="RO">Romania</option>
    <option value="RU">Russian Federation</option>
    <option value="RW">Rwanda</option>
    <option value="BL">Saint Barthelemy</option>
    <option value="SH">Saint Helena</option>
    <option value="KN">Saint Kitts and Nevis</option>
    <option value="LC">Saint Lucia</option>
    <option value="MF">Saint Martin</option>
    <option value="PM">Saint Pierre and Miquelon</option>
    <option value="VC">Saint Vincent and the Grenadines</option>
    <option value="WS">Samoa</option>
    <option value="SM">San Marino</option>
    <option value="ST">Sao Tome and Principe</option>
    <option value="SA">Saudi Arabia</option>
    <option value="SN">Senegal</option>
    <option value="RS">Serbia</option>
    <option value="CS">Serbia and Montenegro</option>
    <option value="SC">Seychelles</option>
    <option value="SL">Sierra Leone</option>
    <option value="SG">Singapore</option>
    <option value="SX">Sint Maarten</option>
    <option value="SK">Slovakia</option>
    <option value="SI">Slovenia</option>
    <option value="SB">Solomon Islands</option>
    <option value="SO">Somalia</option>
    <option value="ZA">South Africa</option>
    <option value="GS">South Georgia and the South Sandwich Islands</option>
    <option value="SS">South Sudan</option>
    <option value="ES">Spain</option>
    <option value="LK">Sri Lanka</option>
    <option value="SD">Sudan</option>
    <option value="SR">Suriname</option>
    <option value="SJ">Svalbard and Jan Mayen</option>
    <option value="SZ">Swaziland</option>
    <option value="SE">Sweden</option>
    <option value="CH">Switzerland</option>
    <option value="SY">Syrian Arab Republic</option>
    <option value="TW">Taiwan, Province of China</option>
    <option value="TJ">Tajikistan</option>
    <option value="TZ">Tanzania, United Republic of</option>
    <option value="TH">Thailand</option>
    <option value="TL">Timor-Leste</option>
    <option value="TG">Togo</option>
    <option value="TK">Tokelau</option>
    <option value="TO">Tonga</option>
    <option value="TT">Trinidad and Tobago</option>
    <option value="TN">Tunisia</option>
    <option value="TR">Turkey</option>
    <option value="TM">Turkmenistan</option>
    <option value="TC">Turks and Caicos Islands</option>
    <option value="TV">Tuvalu</option>
    <option value="UG">Uganda</option>
    <option value="UA">Ukraine</option>
    <option value="AE">United Arab Emirates</option>
    <option value="GB">United Kingdom</option>
    <option value="US">United States</option>
    <option value="UM">United States Minor Outlying Islands</option>
    <option value="UY">Uruguay</option>
    <option value="UZ">Uzbekistan</option>
    <option value="VU">Vanuatu</option>
    <option value="VE">Venezuela</option>
    <option value="VN">Viet Nam</option>
    <option value="VG">Virgin Islands, British</option>
    <option value="VI">Virgin Islands, U.s.</option>
    <option value="WF">Wallis and Futuna</option>
    <option value="EH">Western Sahara</option>
    <option value="YE">Yemen</option>
    <option value="ZM">Zambia</option>
    <option value="ZW">Zimbabwe</option>
    </select>
    Choose Your Visa Type

    </div>





                            <div class="col-12 mb-3">
                            <select name="visaType" class="form-control" required>
                            <option value="" disabled selected>... Choose Your Type Of Visa ...</option>
        <option value="Tourist">Tourist Visa</option>
        <option value="Business">Business Visa</option>
        <option value="Student">Student Visa</option>
        <option value="Invester">Invester Visa</option>
        <option value="Work">Work Visa</option>
    </select>
    Choose Your Visa Type

    </div><br><br>

                            <div class="col-12 mb-3">
                                <label class="control control--checkbox">
                  <span class="caption">Accept our <a href="#">terms and conditions</a></span>
                  <input type="checkbox" checked="checked" />
                  <div class="control__indicator"></div>
                </label>
                            </div>

                            

                            <div class="col-12">
                                <input type="submit" value="Submit" class="btn btn-primary" name="submit">
                            </div>
                    </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- /.untree_co-section -->


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
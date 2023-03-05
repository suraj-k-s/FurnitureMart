<?php
session_start();

include("../Assets/Connection/Connection.php");
$shopid=$_SESSION["kid"];
?>
<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Shop Home Page</title>
    <link rel="icon" href="../Assets/Template/Main/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Assets/Template/Main/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="../Assets/Template/Main/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="../Assets/Template/Main/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="../Assets/Template/Main/css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="../Assets/Template/Main/css/flaticon.css">
    <link rel="stylesheet" href="../Assets/Template/Main/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="../Assets/Template/Main/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="../Assets/Template/Main/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="../Assets/Template/Main/css/style.css">
</head>

<body class="ti-control-forward">
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="#"> <img src="../Assets/Template/Main/img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="HomePage.php">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Privacy
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="MyProfile.php">My Profile</a>
                                        <a class="dropdown-item" href="EditProfile.php">Edit Profile</a>
                                        <a class="dropdown-item" href="ChangePassword.php">Change Password</a>
                                    </div>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="OrderDetails.php">Orders</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Product.php">Product</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../Guest/Login.php">Logout</a>
                                </li>
                            </ul>
                        </div>
                        
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_slider owl-carousel">
                        <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Welcome 
                                            shop</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="../Assets/Template/Main/img/banner_img.png" alt="">
                                </div>
                            </div>
                        </div><div class="single_banner_slider">
                            <!--<div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Furniture
                                                Mart</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <!--<a href="../Assets/Template/Main/#" class="btn_2">buy now</a>-->
                                           
											
                                <!--        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="../Assets/Template/Main/img/banner_img.png" alt="">
                                </div>
                            </div>
                        </div><div class="single_banner_slider">-->-->
                         <?php
											$selectqry="SELECT * FROM tbl_shop where shop_id='".$shopid."'";
											$result = $Conn->query($selectqry);
											if($row=$result->fetch_assoc())
											{
											?>
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1><?php echo $row["shop_name"]; ?></h1>
                                            <p>If I have free time, I want to go to the beach, 
                                               walk around a shopping mall,go grocery shopping.
                                               Live a little bit of life.
                                               </p>
                                            <a href="../Guest/Login.php" class="btn_2">Logout</a>
                                        </div>
                                        <?php
											}
											?>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="../Assets/Template/Main/img/shopbg.png " height="500" width="400" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Cloth $ Wood Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="../Assets/Template/Main/#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="../Assets/Template/Main/img/banner_img.png" alt="">
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="slider-counter"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start--><!-- upcoming_event part start-->

    <!-- product_list start--><!-- product_list part start-->

    <!-- awesome_shop start-->
    <!--<section class="our_offer section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">             
               <div class="col-lg-6 col-md-6">
                    <div class="offer_text">
                        <h2>Weekly Sale 
                            </h2>
                        <div class="date_countdown">
                            <div id="timer">
                                <div id="days" class="date"></div>
                                <div id="hours" class="date"></div>
                                <div id="minutes" class="date"></div>
                                <div id="seconds" class="date"></div>
                            </div>
                        </div>-->
                        <!--<div class="input-group">
                            <input type="text" class="form-control" placeholder="enter email address"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <a href="../Assets/Template/Main/#" class="input-group-text btn_2" id="basic-addon2">book now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- awesome_shop part start-->

    <!-- product_list part start-->
    <!--<section class="product_list best_seller section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Best Sellers <span>shop</span></h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between"></div>
        </div>
    </section>-->
    <!-- product_list part end-->

    <!-- subscribe_area part start--><!--::subscribe_area part end::-->

    <!-- subscribe_area part start-->
    <!--<section class="client_logo padding_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="single_client_logo">
                        <img src="../Assets/Template/Main/img/client_logo/client_logo_1.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="../Assets/Template/Main/img/client_logo/client_logo_2.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="../Assets/Template/Main/img/client_logo/client_logo_3.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="../Assets/Template/Main/img/client_logo/client_logo_4.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="../Assets/Template/Main/img/client_logo/client_logo_5.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="../Assets/Template/Main/img/client_logo/client_logo_3.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="../Assets/Template/Main/img/client_logo/client_logo_1.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="../Assets/Template/Main/img/client_logo/client_logo_2.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="../Assets/Template/Main/img/client_logo/client_logo_3.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="../Assets/Template/Main/img/client_logo/client_logo_4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!--::subscribe_area part end::-->

    <!--::footer_part start::-->
    <footer class="footer_part">
       <!-- <div class="container">
            <div class="row justify-content-around">-->
                <!--<div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Top Products</h4>
                        <ul class="list-unstyled">
                            <li><a href="../Assets/Template/Main/">Managed Website</a></li>
                            <li><a href="../Assets/Template/Main/">Manage Reputation</a></li>
                            <li><a href="../Assets/Template/Main/">Power Tools</a></li>
                            <li><a href="../Assets/Template/Main/">Marketing Service</a></li>
                        </ul>
                    </div>
                </div>-->
                <!--<div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Quick Links</h4>
                        <ul class="list-unstyled">
                            <li><a href="../Assets/Template/Main/">Jobs</a></li>
                            <li><a href="../Assets/Template/Main/">Brand Assets</a></li>
                            <li><a href="../Assets/Template/Main/">Investor Relations</a></li>
                            <li><a href="../Assets/Template/Main/">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>-->
                <!--<div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Features</h4>
                        <ul class="list-unstyled">
                            <li><a href="../Assets/Template/Main/">Jobs</a></li>
                            <li><a href="../Assets/Template/Main/">Brand Assets</a></li>
                            <li><a href="../Assets/Template/Main/">Investor Relations</a></li>
                            <li><a href="../Assets/Template/Main/">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>-->
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Resources</h4>
                        <ul class="list-unstyled">
                            <li><a href="../Assets/Template/Main/">Guides</a></li>
                            <li><a href="../Assets/Template/Main/">Research</a></li>
                            <li><a href="../Assets/Template/Main/">Experts</a></li>
                            <li><a href="../Assets/Template/Main/">Agencies</a></li>
                        </ul>
                    </div>
                </div>
               <!-- <div class="col-sm-6 col-lg-4">
                    <div class="single_footer_part">
                        <h4>Newsletter</h4>
                        <p>Heaven fruitful doesn't over lesser in days. Appear creeping
                        </p>
                        <div id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="subscribe_form relative mail_part">
                                <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                    class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = ' Email Address '">
                                <button type="submit" name="submit" id="newsletter-submit"
                                    class="email_icon newsletter-submit button-contactForm">subscribe</button>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>-->
        <div class="copyright_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="copyright_text">
                            <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="../Assets/Template/Main/https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer_icon social_icon">
                            <ul class="list-unstyled">
                                <li><a href="../Assets/Template/Main/#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="../Assets/Template/Main/#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="../Assets/Template/Main/#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                                <li><a href="../Assets/Template/Main/#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="../Assets/Template/Main/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="../Assets/Template/Main/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="../Assets/Template/Main/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="../Assets/Template/Main/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="../Assets/Template/Main/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="../Assets/Template/Main/js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="../Assets/Template/Main/js/owl.carousel.min.js"></script>
    <script src="../Assets/Template/Main/js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="../Assets/Template/Main/js/slick.min.js"></script>
    <script src="../Assets/Template/Main/js/jquery.counterup.min.js"></script>
    <script src="../Assets/Template/Main/js/waypoints.min.js"></script>
    <script src="../Assets/Template/Main/js/contact.js"></script>
    <script src="../Assets/Template/Main/js/jquery.ajaxchimp.min.js"></script>
    <script src="../Assets/Template/Main/js/jquery.form.js"></script>
    <script src="../Assets/Template/Main/js/jquery.validate.min.js"></script>
    <script src="../Assets/Template/Main/js/mail-script.js"></script>
    <!-- custom js -->
    <script src="../Assets/Template/Main/js/custom.js"></script>
</body>

</html>
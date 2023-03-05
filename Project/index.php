<!doctype html>
<html lang="zxx">
<?php
include("Assets/Connection/Connection.php");

?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FurnitureMart</title>
    <link rel="icon" href="Assets/Template/Main/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Assets/Template/Main/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="Assets/Template/Main/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="Assets/Template/Main/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="Assets/Template/Main/css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="Assets/Template/Main/css/flaticon.css">
    <link rel="stylesheet" href="Assets/Template/Main/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="Assets/Template/Main/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="Assets/Template/Main/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="Assets/Template/Main/css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="Assets/Template/Main/index.html"> <img src="Assets/Template/Main/img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="Assets/Template/Main/blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Registration
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="Guest/Shop.php">Shop</a>
                                        <a class="dropdown-item" href="Guest/User.php">User</a>
                                    </div>
                                </li>
                               <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="Assets/Template/Main/blog.html" id="navbarDropdown_3"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="Assets/Template/Main/login.html"> login</a>
                                        <a class="dropdown-item" href="Assets/Template/Main/tracking.html">tracking</a>
                                        <a class="dropdown-item" href="Assets/Template/Main/checkout.html">product checkout</a>
                                        <a class="dropdown-item" href="Assets/Template/Main/cart.html">shopping cart</a>
                                        <a class="dropdown-item" href="Assets/Template/Main/confirmation.html">confirmation</a>
                                        <a class="dropdown-item" href="Assets/Template/Main/elements.html">elements</a>
                                    </div>
                                </li>-->
                               <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="Assets/Template/Main/blog.html" id="navbarDropdown_2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="Assets/Template/Main/blog.html"> blog</a>
                                        <a class="dropdown-item" href="Assets/Template/Main/single-blog.html">Single blog</a>
                                    </div>
                                </li>-->
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="Guest/Login.php">Login</a>
                                </li>
                            </ul>
                        </div>
                       <!-- <div class="hearer_icon d-flex">
                            <a id="search_1" href="Assets/Template/Main/javascript:void(0)"><i class="ti-search"></i></a>
                            <a href="Assets/Template/Main/"><i class="ti-heart"></i></a>
                            <div class="dropdown cart">
                                <a class="dropdown-toggle" href="Assets/Template/Main/#" id="navbarDropdown3" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-cart-plus"></i>
                                </a>
                            </div>
                        </div>-->
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
                                            <h1>Furniture<br>
                                                Mart</h1>
                                            <p>“The odds of going to the store for a loaf of bread and
                                                coming out with only a loaf of bread are
                                                three billion to one.”</p>
                                            <a href="#" class="btn_2">HOME</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="Assets/Template/Main/img/banner_img.png" alt="">
                                </div>
                            </div>
                        </div><div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Comfortable </h1>
                                            <p>Welcome to FurnitureMart</p>
                                            <a href="#" class="btn_2">HOME</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                
                                 <br>   <img src="Assets/Template/Main/img/FinalSofabg.png" width="740" height="400"alt="">
                                </div>
                            </div>
                        </div><!--<div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Durablity
                                                </h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">HOME</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="Assets/Template/Main/img/RedSofaFinal.png"  alt="">
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
                                            <a href="Assets/Template/Main/#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="Assets/Template/Main/img/banner_img.png" alt="">
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

    <!-- feature_part start-->
    <section class="feature_part padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_tittle text-center">
                        <h2>Featured Category</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7 col-sm-6">
                    <div class="single_feature_post_text">
                        <p>Premium Quality</p>
                        <h3>Latest foam Sofa</h3>
                       <!-- <a href="#" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>-->
                        <img src="Assets/Template/Main/img/feature/feature_1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="single_feature_post_text">
                        <p>Premium Quality</p>
                        <h3>Latest foam Sofa</h3>
                        <a href="Guest/Login.php" class="feature_btn">EXPLORE MORE <i class="fas fa-play"></i></a>
                        <img src="Assets/Template/Main/img/feature/feature_2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="single_feature_post_text">
                        <p>Premium Quality</p>
                        <h3>Latest foam Sofa</h3>
                        <a href="Guest/Login.php" class="feature_btn">EXPLORE MORE <i class="fas fa-play"></i></a>
                        <img src="Assets/Template/Main/img/feature/feature_3.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-sm-6">
                    <div class="single_feature_post_text">
                        <p>Premium Quality</p>
                        <h3>Latest foam Sofa</h3>
                        <a href="Guest/Login.php" class="feature_btn">EXPLORE MORE <i class="fas fa-play"></i></a>
                        <img src="Assets/Template/Main/img/feature/feature_4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

    <!-- product_list start-->
    <section class="product_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Trend <span>shop</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_list_slider owl-carousel">
                        <div class="single_product_list_slider">
                            <div class="row align-items-center justify-content-between">
                                
                                <?php
								
									$selQry = "select * from tbl_product";
									$result = $Conn->query($selQry);
									while($row = $result->fetch_assoc())
									{
										?>
                                        	<div class="col-lg-3 col-sm-6">
                                                <div class="single_product_item">
                                                    <img src="Assets/Files/Photo/<?php echo $row["product_photo"];?>" width="220" height="320" alt="">
                                                    <div class="single_product_text">
                                                        <h4><?php echo $row["product_name"]?></h4>
                                                        <h3><?php echo $row["product_price"]?></h3>
                                                        <a href="Guest/Login.php" class="add_cart">+Explore more<i class="ti-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
									}								
								
								?>
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part start-->
   
    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Top Products</h4>
                        <ul class="list-unstyled">
                            <li><a href="Assets/Template/Main/">Managed Website</a></li>
                            <li><a href="Assets/Template/Main/">Manage Reputation</a></li>
                            <li><a href="Assets/Template/Main/">Power Tools</a></li>
                            <li><a href="Assets/Template/Main/">Marketing Service</a></li>
                        </ul>
                    </div>
                </div>
                <!--<div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Quick Links</h4>
                        <ul class="list-unstyled">
                            <li><a href="Assets/Template/Main/">Jobs</a></li>
                            <li><a href="Assets/Template/Main/">Brand Assets</a></li>
                            <li><a href="Assets/Template/Main/">Investor Relations</a></li>
                            <li><a href="Assets/Template/Main/">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>-->
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Features</h4>
                        <ul class="list-unstyled">
                            <li><a href="Assets/Template/Main/">Jobs</a></li>
                            <li><a href="Assets/Template/Main/">Brand Assets</a></li>
                            <li><a href="Assets/Template/Main/">Investor Relations</a></li>
                            <li><a href="Assets/Template/Main/">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
                <!--<div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Resources</h4>
                        <ul class="list-unstyled">
                            <li><a href="Assets/Template/Main/">Guides</a></li>
                            <li><a href="Assets/Template/Main/">Research</a></li>
                            <li><a href="Assets/Template/Main/">Experts</a></li>
                            <li><a href="Assets/Template/Main/">Agencies</a></li>
                        </ul>
                    </div>
                </div>-->
                <!--<div class="col-sm-6 col-lg-4">
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="Assets/Template/Main/https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer_icon social_icon">
                            <ul class="list-unstyled">
                                <li><a href="Guest/Login.php" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="Assets/Template/Main/#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="Assets/Template/Main/#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                                <li><a href="Assets/Template/Main/#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="Assets/Template/Main/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="Assets/Template/Main/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="Assets/Template/Main/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="Assets/Template/Main/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="Assets/Template/Main/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="Assets/Template/Main/js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="Assets/Template/Main/js/owl.carousel.min.js"></script>
    <script src="Assets/Template/Main/js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="Assets/Template/Main/js/slick.min.js"></script>
    <script src="Assets/Template/Main/js/jquery.counterup.min.js"></script>
    <script src="Assets/Template/Main/js/waypoints.min.js"></script>
    <script src="Assets/Template/Main/js/contact.js"></script>
    <script src="Assets/Template/Main/js/jquery.ajaxchimp.min.js"></script>
    <script src="Assets/Template/Main/js/jquery.form.js"></script>
    <script src="Assets/Template/Main/js/jquery.validate.min.js"></script>
    <script src="Assets/Template/Main/js/mail-script.js"></script>
    <!-- custom js -->
    <script src="Assets/Template/Main/js/custom.js"></script>
</body>

</html>
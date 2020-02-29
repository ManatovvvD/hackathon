<!doctype html>
<html lang="zxx">
<style type="text/css">
    #macro{
        height: 70px;
    }
    #gage{
        font-size: 36px;
        font-family: sans-serif cursive;
        color:#fff;
        font-weight: bold;
        position: absolute;
        left: -50px;
        top: 15px;

    }
    #dade{
        font-size: 36px;
        font-family: sans-serif cursive;
        color:blue;
        font-weight: bold;
        position: absolute;
        top: -15px;
        left: -30px;
    }
</style>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>WebMeet</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand main_logo" target="_blank" href="https://180107147.my.webex.com/webappng/sites/180107147.my/meeting/download/5a4a176cfa11ad9c10513b3081e89e78?launchApp=true" id="gage">WebMeet</a>
                        <a class="navbar-brand single_page_logo" target="_blank" href="https://180107147.my.webex.com/webappng/sites/180107147.my/meeting/download/5a4a176cfa11ad9c10513b3081e89e78?launchApp=true"> <img src="img/footer_logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('Index.elements')}}">ratings</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Categories
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <a class="dropdown-item" href="{{route('Index.cat_ing')}}">Engineering</a>
                                        <a class="dropdown-item" href="elements2.html">Psychology</a>
                                        <a class="dropdown-item" href="elements3.html">Mathematics</a>
                                        <a class="dropdown-item" href="elements4.html">Language</a>
                                        <a class="dropdown-item" href="elements5.html">Laws</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('Index.contact')}}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    <a href="{{route('register')}}" class="d-none d-sm-block btn_1 home_page_btn">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!--::Header part end::-->

    <!--::banner part start::-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5">
                    <div class="banner_img d-none d-lg-block">
                        <img src="img/banner_img.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>Connecting People</h1>
                            <p>Can't find a mentor? Need a valid information? WebMeet is the best choice for you. Sign up right now for free! </p>
                            <a href="#" class="btn_2">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="img/animate_icon/Ellipse_7.png" alt="" class="feature_icon_1 custom-animation1">
        <img src="img/animate_icon/Ellipse_8.png" alt="" class="feature_icon_2 custom-animation2">
        <img src="img/animate_icon/Ellipse_1.png" alt="" class="feature_icon_3 custom-animation3">
        <img src="img/animate_icon/Ellipse_2.png" alt="" class="feature_icon_4 custom-animation4">
        <img src="img/animate_icon/Ellipse_3.png" alt="" class="feature_icon_5 custom-animation5">
        <img src="img/animate_icon/Ellipse_4.png" alt="" class="feature_icon_6 custom-animation6">
    </section>
    <!--::banner part start::-->

    <!--::use sasu part end::-->
    <section class="use_sasu padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <img src="img/icon/feature_icon_1.png" alt="">
                            <h4>Fully Secured</h4>
                            <p>Made great fish shall beast, fourth land also Doesn
                                tree without lesser likeness he fruit of called gathering
                                day whose called were have </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <img src="img/icon/feature_icon_2.png" alt="">
                            <h4>Unique Design</h4>
                            <p>Made great fish shall beast, fourth land also Doesn tree
                                without lesser likeness he fruit of called gathering day whose
                                called were have </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <img src="img/icon/feature_icon_3.png" alt="">
                            <h4>A Volunteer</h4>
                            <p>Made great fish shall beast, fourth land also Doesn tree without
                                lesser likeness he fruit of called gathering day whose called were have </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="img/animate_icon/Ellipse_1.png" alt="" class="feature_icon_1 custom-animation1">
    </section>
    <!--::use sasu part end::-->

    <!--::about_us part start::-->
    <section class="about_us section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-5">
                    <div class="about_us_text">
                        <img src="img/icon/Icon_1.png" alt="">
                        <h2>Easy To Access</h2>
                        <p>Simplcity of the access will not be affected no matter the situations. The customers will have the best conditions</p>   
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="learning_img">
                        <img src="img/review_bg.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <img src="img/animate_icon/Ellipse_4.png" alt="" class="feature_icon_1 custom-animation1">
    </section>
    <!--::about_us part end::-->

    <!--::about_us part start::-->
    <section class="about_us right_time">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_img">
                        <img src="img/about_img_1.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="about_us_text">
                        <img src="img/icon/Icon_2.png" alt="">
                        <h2>System of ranking and more...</h2>
                        <p>Earn the accesss to the further opportunities.</p>
                    </div>
                </div>
            </div>
        </div>
        <img src="img/animate_icon/Ellipse_5.png" alt="" class="feature_icon_2 custom-animation2">
    </section>
    <!--::about_us part end::-->

    <!--::pricing part start::-->
    
    <!--::pricing part end::-->

    <!--::about_us part start::-->
    <section class="review_part padding_bottom">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-6">
<!--                     <div class="review_img">
                        <img src="img/review_bg.png" alt="">
                    </div> -->
                </div>
                </div>
            </div>
        </div>
        <img src="img/animate_icon/Ellipse_4.png" alt="" class="feature_icon_2 custom-animation2">
    </section>
    <!--::about_us part end::-->

    <!--::subscribe us part end::-->
    <section class="subscribe_part padding_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="subscribe_part_text text-center">
                        <h2>Experience the most simple way to <br>
                            manage business</h2>
                        <div class="subscribe_form">
                            <form action="#">
                                <div class="form-row">
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" placeholder="enter your email">
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="subscribe_btn">
                                            <div class="btn_2 d-block">send email</div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="img/animate_icon/Ellipse_5.png" alt="" class="feature_icon_2 custom-animation2">
    </section>
    <!--::subscribe us part end::-->

    <!--::client logo part end::-->
    <section class="client_logo">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="client_logo_slider owl-carousel d-flex justify-content-between">
                        <div class="single_client_logo">
                            <img id="macro" src="img/elements/cs.png" alt="">
                        </div>
                        <div class="single_client_logo">
                            <img id="macro" src="img/elements/cs1.png" alt="">
                        </div>
                        <div class="single_client_logo">
                            <img id="macro" src="img/elements/cs2.png" alt="">
                        </div>
                        <div class="single_client_logo">
                            <img id="macro" src="img/elements/cs.png" alt="">
                        </div>
                        <div class="single_client_logo">
                            <img id="macro" src="img/elements/cs1.png" alt="">
                        </div>
                        <div class="single_client_logo">
                            <img id="macro" src="img/elements/cs2.png" alt="">
                        </div>
                        <div class="single_client_logo">
                            <img id="macro" src="img/elements/cs.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::client logo part end::-->

    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-4 col-lg-4">
                    <div class="single_footer_part">
                        <a href="#" id="dade">WebMeet</a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2">
                    <div class="single_footer_part">
                        <h4>About Us</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Managed Website</a></li>
                            <li><a href="">Manage Reputation</a></li>
                            <li><a href="">Power Tools</a></li>
                            <li><a href="">Marketing Service</a></li>
                            <li><a href="">Customer Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Quick Links</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Store Hours</a></li>
                            <li><a href="">Brand Assets</a></li>
                            <li><a href="">Investor Relations</a></li>
                            <li><a href="">Terms of Service</a></li>
                            <li><a href="">Privacy & Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2">
                    <div class="single_footer_part">
                        <h4>My Account</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Press Inquiries</a></li>
                            <li><a href="">Media Directories</a></li>
                            <li><a href="">Investor Relations</a></li>
                            <li><a href="">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Resources</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Application Security</a></li>
                            <li><a href="">Software Policy</a></li>
                            <li><a href="">Supply Chain</a></li>
                            <li><a href="">Agencies Relation</a></li>
                            <li><a href="">Manage Reputation</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-8">
                    <div class="copyright_text">
                        <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer_icon social_icon">
                        <ul class="list-unstyled">
                            <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>
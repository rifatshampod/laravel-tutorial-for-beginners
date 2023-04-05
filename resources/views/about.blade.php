<!doctype html>
<html lang="en">

<x-header />

<body class="bg-white">

    <!-- LOADER -->
    <div class="preloader">
        <div class="lds-ellipsis">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- END LOADER -->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navigation">
                            <nav class="navbar navbar-expand-lg navbar-light ">

                                <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt=""></a> <!-- logo -->

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                </button> <!-- navbar toggler -->

                                <!--- menu here -->
                                <x-menu />

                                <div class="navbar-btn d-none d-sm-block">
                                    <a class="main-btn" href="#">Get Started</a>
                                </div>

                            </nav>
                        </div> <!-- navigation -->
                    </div>
                </div> <!-- row -->
            </div>
        </div>
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== PAGE TITLE  PART START ======-->

    <div class="page-title-area">
        <div class="section__bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-content text-center">
                        <h3 class="title">About Us</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                        <div class="scroll-to-down">
                            <a href="#portfolio-scroll"><i class="fal fa-arrow-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PAGE TITLE  PART ENDS ======-->

    <!--====== ABOUT US PART START ======-->

    <section class="about-us-area pt-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-content">
                        <img src="assets/images/hero-line.png" alt="">
                        <span>About us</span>
                        <h3 class="title">{{$title}} </h3>
                        <p>Sitting proudly atop is the two-storey penthouse. The nati master bedroom suite is phenomenally spacious makes the most of a its unrivalled position.</p>
                        <ul>
                            <li>Graphic design template</li>
                            <li>Motion ui design</li>
                            <li>Theme template design</li>
                            <li>User interface design</li>
                        </ul>
                        <a class="main-btn" href="#">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-thumb animated wow fadeInRight" data-wow-duration="3000ms" data-wow-delay="0ms">
                        <img src="assets/images/about-thumb.png" alt="">
                        <ul>
                            <li>
                                <img src="assets/images/about-brand-1.png" alt="">
                                <span>Top Rated</span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <img src="assets/images/about-brand-2.png" alt="">
                                <span>Our Rated</span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <img src="assets/images/about-brand-3.png" alt="">
                                <span>Our Rated 5 of 5</span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== ABOUT US PART ENDS ======-->

    <!--====== PORTFOLIO STYLE 1 PART START ======-->

    <div id="portfolio-scroll" class="portfolio-style-1-area pt-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="section-title text-center">
                        <img src="assets/images/hero-line.png" alt="">
                        <h3 class="title">Our Project</h3>
                        <p>Our focus is on delivering you the absolute best support guiding you through training and providing.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="project-5-item mt-30">
                        <img src="assets/images/project/project-1.png" alt="">
                        <div class="project-overlay">
                            <h3 class="title">Digital Product Design</h3>
                            <span>Artist, Illustration</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="project-5-item mt-30">
                        <img src="assets/images/project/project-2.png" alt="">
                        <div class="project-overlay">
                            <h3 class="title">Digital Product</h3>
                            <span>Artist, Illustration</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="project-5-item mt-30">
                        <img src="assets/images/project/project-3.png" alt="">
                        <div class="project-overlay">
                            <h3 class="title">Digital Product </h3>
                            <span>Artist, Illustration</span>
                        </div>
                    </div>
                    <div class="project-5-item mt-30">
                        <img src="assets/images/project/project-4.png" alt="">
                        <div class="project-overlay">
                            <h3 class="title">Digital Product </h3>
                            <span>Artist, Illustration</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="project-5-item mt-30">
                        <img src="assets/images/project/project-5.png" alt="">
                        <div class="project-overlay">
                            <h3 class="title">Digital Product Design</h3>
                            <span>Artist, Illustration</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="project-5-item mt-30">
                                <img src="assets/images/project/project-6.png" alt="">
                                <div class="project-overlay">
                                    <h3 class="title">Digital Product</h3>
                                    <span>Artist, Illustration</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="project-5-item mt-30">
                                <img src="assets/images/project/project-7.png" alt="">
                                <div class="project-overlay">
                                    <h3 class="title">Digital Product </h3>
                                    <span>Artist, Illustration</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="project-5-item mt-30">
                        <img src="assets/images/project/project-8.png" alt="">
                        <div class="project-overlay">
                            <h3 class="title">Digital Product Design</h3>
                            <span>Artist, Illustration</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PORTFOLIO STYLE 1 PART ENDS ======-->

    <!--====== TESTIMONIAL PART START ======-->

    <section class="testimonial-area mt-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="section-title section-title-2 text-center">
                        <img src="assets/images/hero-line.png" alt="">
                        <h3 class="title">Testimonial</h3>
                        <p>Our focus is on delivering you the absolute best support guiding you through training and providing.</p>
                    </div>
                </div>
            </div>
            <div class="row testimonial-active">
                <div class="col-lg-4">
                    <div class="testimonial-item mt-30">
                        <div class="quote">
                            <svg xmlns="http://www.w3.org/2000/svg" width="53.729" height="40" viewBox="0 0 53.729 40">
                                <g data-name="Group 21" transform="translate(0 0)">
                                    <path data-name="Union 1" d="M47.055,40a1.21,1.21,0,0,1-1.018-.509L31.106,19.357A12.178,12.178,0,0,1,29.07,11.1,12.364,12.364,0,1,1,45.98,23.881l6.957,14.253A1.313,1.313,0,0,1,51.806,40ZM18.1,40a1.209,1.209,0,0,1-1.018-.509L2.149,19.357A12.77,12.77,0,0,1,.056,11.043,12.395,12.395,0,1,1,17.023,23.881L23.98,38.134A1.313,1.313,0,0,1,22.849,40Z" transform="translate(0 0)" />
                                </g>
                            </svg>
                        </div>
                        <p>There are many variations from into passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable.</p>
                        <div class="info">
                            <img src="assets/images/testimonial-user.png" alt="">
                            <h5 class="title">Abdur Rohman</h5>
                            <span>Sr. Product designer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mt-30">
                        <div class="quote">
                            <svg xmlns="http://www.w3.org/2000/svg" width="53.729" height="40" viewBox="0 0 53.729 40">
                                <g data-name="Group 21" transform="translate(0 0)">
                                    <path data-name="Union 1" d="M47.055,40a1.21,1.21,0,0,1-1.018-.509L31.106,19.357A12.178,12.178,0,0,1,29.07,11.1,12.364,12.364,0,1,1,45.98,23.881l6.957,14.253A1.313,1.313,0,0,1,51.806,40ZM18.1,40a1.209,1.209,0,0,1-1.018-.509L2.149,19.357A12.77,12.77,0,0,1,.056,11.043,12.395,12.395,0,1,1,17.023,23.881L23.98,38.134A1.313,1.313,0,0,1,22.849,40Z" transform="translate(0 0)" />
                                </g>
                            </svg>
                        </div>
                        <p>There are many variations from into passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable.</p>
                        <div class="info">
                            <img src="assets/images/testimonial-user.png" alt="">
                            <h5 class="title">Mehedi Hasan</h5>
                            <span>Sr. Product designer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mt-30">
                        <div class="quote">
                            <svg xmlns="http://www.w3.org/2000/svg" width="53.729" height="40" viewBox="0 0 53.729 40">
                                <g data-name="Group 21" transform="translate(0 0)">
                                    <path data-name="Union 1" d="M47.055,40a1.21,1.21,0,0,1-1.018-.509L31.106,19.357A12.178,12.178,0,0,1,29.07,11.1,12.364,12.364,0,1,1,45.98,23.881l6.957,14.253A1.313,1.313,0,0,1,51.806,40ZM18.1,40a1.209,1.209,0,0,1-1.018-.509L2.149,19.357A12.77,12.77,0,0,1,.056,11.043,12.395,12.395,0,1,1,17.023,23.881L23.98,38.134A1.313,1.313,0,0,1,22.849,40Z" transform="translate(0 0)" />
                                </g>
                            </svg>
                        </div>
                        <p>There are many variations from into passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable.</p>
                        <div class="info">
                            <img src="assets/images/testimonial-user.png" alt="">
                            <h5 class="title">Mosharof Hossain</h5>
                            <span>Sr. Product designer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mt-30">
                        <div class="quote">
                            <svg xmlns="http://www.w3.org/2000/svg" width="53.729" height="40" viewBox="0 0 53.729 40">
                                <g data-name="Group 21" transform="translate(0 0)">
                                    <path data-name="Union 1" d="M47.055,40a1.21,1.21,0,0,1-1.018-.509L31.106,19.357A12.178,12.178,0,0,1,29.07,11.1,12.364,12.364,0,1,1,45.98,23.881l6.957,14.253A1.313,1.313,0,0,1,51.806,40ZM18.1,40a1.209,1.209,0,0,1-1.018-.509L2.149,19.357A12.77,12.77,0,0,1,.056,11.043,12.395,12.395,0,1,1,17.023,23.881L23.98,38.134A1.313,1.313,0,0,1,22.849,40Z" transform="translate(0 0)" />
                                </g>
                            </svg>
                        </div>
                        <p>There are many variations from into passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable.</p>
                        <div class="info">
                            <img src="assets/images/testimonial-user.png" alt="">
                            <h5 class="title">Rayhan Uddin</h5>
                            <span>Sr. Product designer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mt-30">
                        <div class="quote">
                            <svg xmlns="http://www.w3.org/2000/svg" width="53.729" height="40" viewBox="0 0 53.729 40">
                                <g data-name="Group 21" transform="translate(0 0)">
                                    <path data-name="Union 1" d="M47.055,40a1.21,1.21,0,0,1-1.018-.509L31.106,19.357A12.178,12.178,0,0,1,29.07,11.1,12.364,12.364,0,1,1,45.98,23.881l6.957,14.253A1.313,1.313,0,0,1,51.806,40ZM18.1,40a1.209,1.209,0,0,1-1.018-.509L2.149,19.357A12.77,12.77,0,0,1,.056,11.043,12.395,12.395,0,1,1,17.023,23.881L23.98,38.134A1.313,1.313,0,0,1,22.849,40Z" transform="translate(0 0)" />
                                </g>
                            </svg>
                        </div>
                        <p>There are many variations from into passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable.</p>
                        <div class="info">
                            <img src="assets/images/testimonial-user.png" alt="">
                            <h5 class="title">Imran Ahmed</h5>
                            <span>Sr. Product designer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== TESTIMONIAL PART ENDS ======-->

    <!--====== TEAM PART START ======-->

    <section class="team-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="section-title text-center">
                        <img src="assets/images/hero-line.png" alt="">
                        <h3 class="title">Our Team</h3>
                        <p>Our focus is on delivering you the absolute best support guiding you through training and providing.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row team-active">
                <div class="col-lg-3">
                    <div class="team-item mt-40 mb-100">
                        <img src="assets/images/team-1.jpg" alt="">
                        <div class="team-overlay d-flex align-items-end">
                            <div class="content">
                                <h4 class="title">Charlotte Emma</h4>
                                <span>Product Designer</span>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-item mt-40 mb-100">
                        <img src="assets/images/team-2.jpg" alt="">
                        <div class="team-overlay d-flex align-items-end">
                            <div class="content">
                                <h4 class="title">Charlotte Emma</h4>
                                <span>Product Designer</span>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-item mt-40 mb-100">
                        <img src="assets/images/team-3.jpg" alt="">
                        <div class="team-overlay d-flex align-items-end">
                            <div class="content">
                                <h4 class="title">Charlotte Emma</h4>
                                <span>Product Designer</span>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-item mt-40 mb-100">
                        <img src="assets/images/team-4.jpg" alt="">
                        <div class="team-overlay d-flex align-items-end">
                            <div class="content">
                                <h4 class="title">Charlotte Emma</h4>
                                <span>Product Designer</span>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-item mt-40 mb-100">
                        <img src="assets/images/team-5.jpg" alt="">
                        <div class="team-overlay d-flex align-items-end">
                            <div class="content">
                                <h4 class="title">Charlotte Emma</h4>
                                <span>Product Designer</span>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-item mt-40 mb-100">
                        <img src="assets/images/team-2.jpg" alt="">
                        <div class="team-overlay d-flex align-items-end">
                            <div class="content">
                                <h4 class="title">Charlotte Emma</h4>
                                <span>Product Designer</span>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== TEAM PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-top d-block d-sm-flex  justify-content-between align-items-center">
                        <div class="footer-logo">
                            <a href="#"><img src="assets/images/logo.png" alt=""></a>
                        </div>
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-item">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-about mt-30">
                            <h4 class="title">Company</h4>
                            <p>DNP Installations can carry out all maintenance on phone and data and phone points in DNP Installations can carry out all maintenance on phone and data and phone.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-list mt-30 ml-95">
                            <h4 class="title">Quick links</h4>
                            <ul>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">General</a></li>
                                <li><a href="#">Insights</a></li>
                                <li><a href="#">Tech</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-list mt-30">
                            <h4 class="title">Categories</h4>
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Terms and conditions</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info mt-30">
                            <h3 class="title">Categories</h3>
                            <ul>
                                <li><i class="fal fa-map-marker-alt"></i> 445 Main Street, New York CA-12325, USA </li>
                                <li><i class="fal fa-phone"></i> +00 125 456 888 </li>
                                <li><i class="fal fa-envelope"></i> contact@aball.com </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copyright">
                        <p>Copyright @ 2020. Design by Seative.Digital</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TOP START ======-->

    <a class="back-to-top">
        <i class="fal fa-angle-up"></i>
    </a>

    <!--====== BACK TO TOP ENDS ======-->









    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!--====== appear js ======-->
    <script src="assets/js/jquery.appear.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== wow js ======-->
    <script src="assets/js/wow.js"></script>

    <!--====== Isotope js ======-->
    <script src="assets/js/isotope.pkgd.min.js"></script>

    <!--====== Images Loaded js ======-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

</body>

</html>

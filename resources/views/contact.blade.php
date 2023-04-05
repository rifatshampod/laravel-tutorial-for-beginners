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
                        <h3 class="title">Contact Us</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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

    <!--====== CONTACT US PART START ======-->

    <section class="contact-us-area contact-us-page">
        <div class="section__bg"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="contact-us-box">
                        {{-- @if (Session::get('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{Session::get('status')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif --}}

                    @if(Session::get('message'))
                    <div class="alert alert-primary" role="alert">
                        {{Session::get('message')}}
                    </div>
                    @endif

                    <h3 class="title">Get in Touch</h3>
                    <p>Give us a call or drop by anytime, we endeavour to <br> answer all enquiries within 24 hours.</p>



                    <form action="contact-form" method="post">
                        @csrf

                        <div class="row no-gutters">
                            <div class="col-lg-6">
                                <div class="input-box mt-10">
                                    <input type="text" name="name" placeholder="Your name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-box mt-10">
                                    <input type="email" name="email" placeholder="Email address">

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-box mt-10">
                                    <input type="text" name="phone" placeholder="number">

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-box mt-10">
                                    <input type="text" name="address" placeholder="Location">

                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-box mt-10">
                                    <textarea name="message" id="#" cols="30" rows="10" placeholder="write message"></textarea>
                                </div>
                                <ul class="checkbox_common checkbox_style5">
                                    <li>
                                        <input type="checkbox" name="checkbox5" id="checkbox13">
                                        <label for="checkbox13"><span></span>I agree to the data protection regulations</label>
                                    </li>
                                </ul>
                                <div class="input-box">
                                    <button class="main-btn " type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>










                </div>
            </div>
        </div>
        </div>
    </section>

    <!--====== CONTACT US PART ENDS ======-->

    <!--====== CONTACT US PART ENDS ======-->

    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14612.962398285066!2d90.45967325!3d23.703100600000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1595237498018!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <!--====== CONTACT US PART ENDS ======-->

    <!--====== SUBSCRIBE PART START ======-->

    <div class="subscribe-area subscribe-9-area subscribe-13-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="subscribe-item">
                        <h3 class="title">Love Eating? Like offer?</h3>
                        <span>Since ancient times, wine has been perceive part of our culture and a symbol of good life role of wine has centuries.</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="subscribe-form subscribe-9-form subscribe-13-form">
                        <input type="email" placeholder="Your email address">
                        <button type="button" class="main-btn">SUBSCRIBE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== SUBSCRIBE PART ENDS ======-->

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

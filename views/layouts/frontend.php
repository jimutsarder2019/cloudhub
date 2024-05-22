<?php
use yii\helpers\Url;
$baseUrl = Url::base();
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>

    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--build:css-->
    <link rel="stylesheet" href="<?=$baseUrl?>/cloudhub/css/main.css">
    <!-- endbuild -->

    <!--custom css start-->
    <link rel="stylesheet" href="<?=$baseUrl?>/cloudhub/css/custom.css">
    <!--custom css end-->

</head>

<body>

    <!--preloader start-->
    <div id="preloader" class="bg-light-subtle">
        <div class="preloader-wrap">
            <img src="<?=$baseUrl?>/cloudhub/img/cloudhub-black-logo.svg" alt="logo" class="img-fluid preloader-icon" style="width: 250px !important; height: auto !important;">
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper bg-light-subtle">
        <!--header section start-->
        <!--header start-->
        <header class="main-header position-absolute w-100">
            <nav class="navbar navbar-expand-xl navbar-dark sticky-header z-10">
                <div class="container d-flex align-items-center justify-content-lg-between position-relative">
                    <a href="index.html" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="<?=$baseUrl?>/cloudhub/img/cloudhub-white-logo.svg" width="100px" alt="logo" class="img-fluid logo-white" />
                        <img src="<?=$baseUrl?>/cloudhub/img/cloudhub-black-logo.svg" width="100px" alt="logo" class="img-fluid logo-color" />
                    </a>
                    <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop">
                        <i class="flaticon-menu" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop"
                   data-bs-toggle="offcanvas" role="button"></i>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse navbar-collapse justify-content-center">
                        <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">Home</a>
                            </li>
                            <li><a href="#about" class="nav-link">About</a></li>
                            <li><a href="services.html" class="nav-link">Services</a></li>
                            
                            <li><a href="#pricing" class="nav-link">Pricing</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="#blog">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#portfolio" >Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                        <a href="javascript:void(0)" class="btn btn-link p-1 tt-theme-toggle">
                            <div class="tt-theme-light" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Light"><i class="flaticon-sun-1 fs-lg"></i></div>
                            <div class="tt-theme-dark" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Dark"><i class="flaticon-moon-1 fs-lg"></i></div>
                        </a> <a href="login.html" class="btn btn-link text-decoration-none me-2" data-bs-toggle="modal" data-bs-target="#myModal">Sign In</a>
                        <a href="get-started.html" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </nav>


            <!--offcanvas menu start-->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
                <div class="offcanvas-header d-flex align-items-center mt-4">
                    <a href="index.html" class="d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="<?=$baseUrl?>/cloudhub/img/cloudhub-black-logo.svg" width="100px" alt="logo" class="img-fluid ps-2" />
                    </a>
                    <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class="flaticon-cancel"></i>
                    </button>
                </div>
                <div class="offcanvas-body">
                    <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">Home</a>
                        </li>
                        <li><a href="#about" class="nav-link">About</a></li>
                        <li><a href="services.html" class="nav-link">Services</a></li>
                        
                        <li><a href="#pricing" class="nav-link">Pricing</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio" >Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
                    <div class="action-btns mt-4 ps-3">
                        <a href="login.html" class="btn btn-outline-primary me-2"  data-bs-toggle="modal" data-bs-target="#myModal">Sign In</a>
                        <a href="get-started.html" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
            <!--offcanvas menu end-->


        </header>
        <!--header end--> <!--header section end-->

        <?php print $content; ?>

        <!--footer section start-->
        <!--footer section start-->
        <footer class="footer-section">
            <!--footer top start-->
            <!--for light footer add .footer-light class and for dark footer add .bg-dark .text-white class-->
            <div class="footer-top  bg-gradient text-white ptb-60" style="background: url('assets/img/page-header-bg.svg')no-repeat bottom right">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-8 col-lg-4 mb-md-4 mb-lg-0">
                            <div class="footer-single-col">
                                <div class="footer-single-col mb-4">
                                    <img src="<?=$baseUrl?>/cloudhub/img/cloudhub-white-logo.svg" width="115px" alt="logo" class="img-fluid logo-white">
                                    <img src="<?=$baseUrl?>/cloudhub/img/cloudhub-white-logo.svg" width="115px" alt="logo" class="img-fluid logo-color">
                                </div>
                                <p>Our latest news, articles, and resources, we will sent to
                                    your inbox weekly.</p>

                                <form class="newsletter-form position-relative d-block d-lg-flex d-md-flex">
                                    <input type="text" class="input-newsletter form-control me-2" placeholder="Enter your email" name="email" required="" autocomplete="off">
                                    <input type="submit" value="Subscribe" data-wait="Please wait..." class="btn btn-primary mt-3 mt-lg-0 mt-md-0">
                                </form>
                                <div class="ratting-wrap mt-4">
                                    <h6 class="mb-0">10/10 Overall rating</h6>
                                    <ul class="list-unstyled rating-list list-inline mb-0">
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-7 mt-4 mt-md-0 mt-lg-0 align-self-center">
                            <div class="row">
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Sitemap</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="index.html" class="text-decoration-none">Home</a></li>
                                            <li><a href="#about" class="text-decoration-none">About Company</a></li>
                                            <li><a href="services.html" class="text-decoration-none">Our Service</a></li>
                                            <li><a href="#portfolio" class="text-decoration-none">Portfolio</a></li>
                                            <li><a href="#pricing" class="text-decoration-none">Pricing Plan</a></li>
                                            <li><a href="career.html" class="text-decoration-none">Career</a></li>
                                            <li><a href="#blog" class="text-decoration-none">Blog</a></li>
                                            <li><a href="contact.html" class="text-decoration-none">Contact</a></li>
                                            <li><a href="login.html" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#myModal">Login</a></li>
                                            <li><a href="register.html" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#myModalRegister">Sign Up</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-8 mt-6 mt-md-0 mt-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">

                                    <div class="contact-info">
                                        <h5 class="mb-3">Contacts</h5>
                                        <div class="d-flex mt-5">
                                            <div class="icon-box d-inline-block rounded-circle bg-primary-soft align-self-center">
                                                <i class="fas fa-phone fa-2x text-white"></i>
                                            </div>
                                            <p class="ps-4 m-0">+8801617622600<br> +8809610203060</p>
                                        </div>
                                        <div class="d-flex">
                                            <div class="icon-box d-inline-block rounded-circle bg-primary-soft m-0 align-self-center">
                                                <i class="fas fa-envelope fa-2x text-white"></i>
                                            </div>
                                            <p class="ps-4 align-self-center m-0">info@cloudhub.com.bd</p>
                                        </div>
                                        <div class="d-flex mt-4">
                                            <div class="icon-box d-inline-block rounded-circle bg-primary-soft m-0 align-self-center">
                                                <i class="fas fa-location-pin fa-2x text-white"></i>
                                            </div>
                                            <p class="ps-4 align-self-center m-0">944 Upper Jashore Road (1st Floor), Joragate Mor, Khulna-9000, Bangladesh.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--footer top end-->

            <!--footer bottom start-->
            <div class="footer-bottom  bg-gradient text-white py-4">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-7 col-lg-7">
                            <div class="copyright-text">
                                <p class="mb-lg-0 mb-md-0">&copy; 2023 Cloud Hub Rights Reserved. Designed and Developed By Cloud Hub Team<a href="#" class="text-decoration-none"></a></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="footer-single-col text-start text-lg-end text-md-end">
                                <ul class="list-unstyled list-inline footer-social-list mb-0">
                                    <li class="list-inline-item"><a href="https://www.facebook.com/profile.php?id=100094057606622"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="http://cloudhub.com.bd/"><i class="fab fa-youtube"></i></a></li>
                                    <li class="list-inline-item"><a href="contact.html"><i class="fas fa-comment"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer bottom end-->
        </footer>
        <!--footer section end--> <!--footer section end-->
    </div>





<!-- The Modal for Login start -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content mt-5 ">

      <!--Login section start-->
        <section class="bg-darks">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="register-wrap p-5 bg-light-subtle shadow rounded-custom">
                            <h1 class="h3">Nice to Seeing You Again</h1>
                            <p class="text-muted">Please log in to access your account web-enabled methods of innovative
                                niches.</p>

                            <div class="action-btns">
                                <a href="#" class="btn google-btn bg-white shadow-sm mt-4 d-block d-flex align-items-center text-decoration-none justify-content-center">
                                    <img src="<?=$baseUrl?>/cloudhub/img/google-icon.svg" alt="google" class="me-3">
                                    <span>Connect with Google</span>
                                </a>
                            </div>
                            <div class="position-relative d-flex align-items-center justify-content-center mt-4 py-4">
                                <span class="divider-bar"></span>
                                <h6 class="position-absolute text-center divider-text bg-light-subtle mb-0">Or</h6>
                            </div>
                            <form action="#" class="mt-4 register-form">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="email" class="mb-1">Email <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" placeholder="Email" id="email" required aria-label="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="password" class="mb-1">Password <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" placeholder="Password" id="password" required aria-label="Password">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mt-3 d-block w-100">Submit</button>
                                    </div>
                                </div>
                                <p class="font-monospace fw-medium text-center text-muted mt-3 pt-4 mb-0">Don’t have an
                                    account? <a href="register.html" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#myModalRegister">Sign up Today</a>
                                    <br>
                                    <a href="password-reset.html" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#myModalForgotPassword">Forgot password</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Login section end-->

    </div>
  </div>
</div>
<!-- The Modal for Login end -->


<!-- The Modal for Login start -->
<div class="modal fade" id="myModalRegister">
  <div class="modal-dialog">
    <div class="modal-content mt-5 ">

      <!--register section start-->
        <section class="bg-darks">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-12">
                        <div class="pricing-content-wrap bg-custom-light rounded-custom shadow-lg">
                            <div class="pricing-action-info p-5 right-radius bg-light-subtle order-0 order-lg-1">
                                <a href="index.html" class="mb-5 d-block d-xl-none d-lg-none"><img src="<?=$baseUrl?>/cloudhub/img/logo-color.png" alt="logo" class="img-fluid"></a>
                                <h1 class="h3">Create an Account</h1>
                                <p class="text-muted">Get started with your free account today. No credit card needed and no
                                    setup fees.</p>

                                <form action="#" class="mt-5 register-form">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="name" class="mb-1">Name <span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Name" id="name" required aria-label="name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="email" class="mb-1">Email <span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <input type="email" class="form-control" placeholder="Email" id="email" required aria-label="email">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <label for="company" class="mb-1">Company</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Company" id="company" aria-label="company">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <label for="password" class="mb-1">Password <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <input type="password" class="form-control" placeholder="Password" id="password" required aria-label="Password">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check d-flex">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckChecked">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    I have read and agree to the <a href="#" class="text-decoration-none">Terms
                                                        & Conditions</a>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mt-4 d-block w-100">Submit</button>
                                        </div>
                                    </div>
                                    <div class="position-relative d-flex align-items-center justify-content-center mt-4 py-4">
                                        <span class="divider-bar"></span>
                                        <h6 class="position-absolute text-center divider-text bg-light-subtle mb-0">Or</h6>
                                    </div>
                                    <div class="action-btns">
                                        <a href="#" class="btn google-btn mt-4 d-block bg-white shadow-sm d-flex align-items-center text-decoration-none justify-content-center">
                                            <img src="<?=$baseUrl?>/cloudhub/img/google-icon.svg" alt="google" class="me-3">
                                            <span>Sign up with Google</span>
                                        </a>
                                    </div>
                                    <p class="text-center text-muted mt-4 mb-0 fw-medium font-monospace">Already have an
                                        account? <a href="login.html" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#myModal">Sign in</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--register section end-->

    </div>
  </div>
</div>
<!-- The Modal for Login end -->

<!-- The Modal for Forgot Password -->
<div class="modal fade" id="myModalForgotPassword">
  <div class="modal-dialog">
    <div class="modal-content mt-5">

      <!--register section start-->
        <section class="bg-darka">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="register-wrap p-5 bg-light-subtle shadow rounded-custom">
                            <h1 class="fw-bold h3">Forgot your Password?</h1>
                            <p class="text-muted">Don't worry. Type your email and we will send a password recovery link to
                                your email..</p>

                            <form action="#" class="mt-5 register-form">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="email" class="mb-1">Email <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" placeholder="Enter your email" id="email" aria-label="email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mt-3 d-block w-100">Reset Password
                                        </button>
                                    </div>
                                </div>
                                <p class="font-monospace fw-medium text-center mt-3 pt-4 mb-0">
                                    <a href="register.html" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#myModal">Back to login page</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--register section end-->

    </div>
  </div>
</div>
<!-- The Modal for Login end -->


    <!--build:js-->
    <script src="<?=$baseUrl?>/cloudhub/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="<?=$baseUrl?>/cloudhub/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="<?=$baseUrl?>/cloudhub/js/vendors/swiper-bundle.min.js"></script>
    <script src="<?=$baseUrl?>/cloudhub/js/vendors/jquery.magnific-popup.min.js"></script>
    <script src="<?=$baseUrl?>/cloudhub/js/vendors/parallax.min.js"></script>
    <script src="<?=$baseUrl?>/cloudhub/js/vendors/aos.js"></script>
    <script src="<?=$baseUrl?>/cloudhub/js/vendors/massonry.min.js"></script>
    <script src="<?=$baseUrl?>/cloudhub/js/app.js"></script>
    <!--endbuild-->
</body>

</html>
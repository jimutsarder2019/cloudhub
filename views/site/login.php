<?php
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\helpers\Url;

$baseUrl = Url::base();
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--twitter og-->
    <meta name="twitter:site" content="@Cloudhub">
    <meta name="twitter:creator" content="@Cloudhub">
    <meta name="twitter:card" content="Cloudhub">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="#">

    <!--facebook og-->
    <meta property="og:url" content="#">
    <meta name="twitter:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="#">
    <meta property="og:image:secure_url" content="#">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!--meta-->
    <meta name="description" content="">
    <meta name="author" content="Cloudhub">

    <!--favicon icon-->
    <link rel="icon" href="<?=$baseUrl?>/cloudhub/img/favicon.png" type="image/png" sizes="16x16">

    <!--title-->
    <title>Cloud Hub - Software & IT Solutions</title>

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
            <img src="<?=$baseUrl?>/cloudhub/img/favicon.png" alt="logo" class="img-fluid preloader-icon">
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">

        <!--register section start-->
        <section class="sign-up-in-section bg-dark ptb-60" style="background: url('assets/img/page-header-bg.svg')no-repeat right bottom">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5 col-md-8 col-12">
                        <a href="index.html" class="mb-4 d-block text-center"><img src="<?=$baseUrl?>/cloudhub/img/cloudhub-white-logo.svg" width="100px" alt="logo" class="img-fluid logo-white" style="display: inline !important;"></a>
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
								    <?php $form = ActiveForm::begin([
											'id' => 'login-form',
											'layout' => 'horizontal',
											'fieldConfig' => [
												'template' => "{label}\n{input}\n{error}",
												'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
												'inputOptions' => ['class' => 'col-lg-3 form-control'],
												'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
											],
										]); ?>

											<?= $form->field($model, 'username')->textInput(['autofocus' => true])->label(); ?>

											<?= $form->field($model, 'password')->passwordInput()->label(); ?>
											
											<div class="form-group">
												<?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
											</div>

									<?php ActiveForm::end(); ?>
									<?php if(0){ ?>
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
									<?php } ?>
                                </div>
                                <p class="font-monospace fw-medium text-center text-muted mt-3 pt-4 mb-0">Don’t have an
                                    account? <a href="register.html" class="text-decoration-none">Sign up Today</a>
                                    <br>
                                    <a href="password-reset.html" class="text-decoration-none">Forgot password</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--register section end-->
    </div>

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
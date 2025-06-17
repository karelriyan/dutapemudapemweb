<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="Site keywords here" />
    <meta name="description" content="" />
    <meta name="copyright" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Title -->
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo e(asset('img/favicon.png')); ?>" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" />
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/nice-select.css')); ?>" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>" />
    <!-- Icofont CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/icofont.css')); ?>" />
    <!-- Slicknav -->
    <link rel="stylesheet" href="<?php echo e(asset('css/slicknav.min.css')); ?>" />
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/owl-carousel.css')); ?>" />
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/datepicker.css')); ?>" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.min.css')); ?>" />
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/magnific-popup.css')); ?>" />

    <!-- Medipro CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/normalize.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/form.css')); ?>" />

    <?php echo $__env->yieldPushContent('styles'); ?>
</head>

<body>
    <!-- Preloader -->
    <!-- End Preloader -->

    <!-- Cp whatsapp -->
    

    <!-- Header Area -->
    <header class="header">
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-12">
                            <!-- Start Logo -->
                            <div class="logo">
                                <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('img/logo.png')); ?>" alt="#" width="60%" /></a>
                            </div>
                            <!-- End Logo -->
                            <!-- Mobile Nav -->
                            <div class="mobile-nav"></div>
                            <!-- End Mobile Nav -->
                        </div>
                        <div class="d-flex col-lg-7 col-md-9 col-12 justify-content-center">
                            <!-- Main Menu -->
                            <div class="main-menu">
                                <nav class="navigation">
                                    <ul class="nav menu">
                                        <li class="<?php echo e(request()->is('/') ? 'active' : ''); ?>">
                                            <a href="<?php echo e(route('home')); ?>">Beranda</a> </li>
                                        <li class="<?php echo e(request()->is('doctors*') ? 'active' : ''); ?>">
                                            <a href="<?php echo e(route('lomba.index')); ?>">Kategori</a>
                                        </li>
                                        <li class="<?php echo e(request()->is('doctors*') ? 'active' : ''); ?>">
                                            <a href="#">FAQ</a>
                                        </li>
                                        <li class="<?php echo e(request()->is('pages*') ? 'active' : ''); ?>">
                                            <a href="/berita">Berita</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!--/ End Main Menu -->
                        </div>
                        <div class="col-lg-2 col-12 ">
                            <div class="get-quote float-right">
                                <?php if(auth()->guard()->check()): ?>
                                    <a href="<?php echo e(route('peserta.index')); ?>" class="btn">Profile</a>
                                <?php else: ?>
                                    <a href="<?php echo e(route('auth.login')); ?>" class="btn">Login</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!-- End Header Area -->

    <!-- Main Content -->
    <?php echo $__env->yieldContent('content'); ?>
    <!-- End Main Content -->

    <!-- Footer Area -->
    <footer id="footer" class="footer">
        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-footer">
                            <h2>About Us</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus, nostrum?</p>
                            <ul class="social">
                                <li>
                                    <a href="#"><img src="<?php echo e(asset('img/logo-unsoed.png')); ?>" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php echo e(asset('img/logo-digiyok.png')); ?>"
                                            alt=""></i></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php echo e(asset('img/logo-dispora.png')); ?>"
                                            alt=""></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-footer f-link">
                            <h2>Quick Links</h2>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Home</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Kategori</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Alur
                                                seleksi</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Berita</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-footer">
                            <h2>Contact</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, alias ducimus vitae
                                voluptatum dicta suscipit.</p>
                            <!-- Social -->
                            <ul class="social">
                                <li>
                                    <a href="#"><i class="icofont-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-whatsapp"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-google-plus"></i></a>
                                </li>
                            </ul>
                            <!-- End Social -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Top -->
        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="copyright-content">
                            <p>
                                © Copyright 2025 | All Rights Reserved by
                                <a href="https://www.wpthemesgrid.com" target="_blank">cihuy</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Copyright -->
    </footer>
    <!--/ End Footer Area -->

    <!-- jQuery Min JS -->

    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery-migrate-3.0.0.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/easing.js')); ?>"></script>
    <script src="<?php echo e(asset('js/colors.js')); ?>"></script>
    <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap-datepicker.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.nav.js')); ?>"></script>
    <script src="<?php echo e(asset('js/slicknav.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.scrollUp.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/niceselect.js')); ?>"></script>
    <script src="<?php echo e(asset('js/tilt.jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/owl-carousel.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.counterup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/steller.js')); ?>"></script>
    <script src="<?php echo e(asset('js/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>

    

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html>
<?php /**PATH C:\laragon\www\DutaPemudaFinal-main\resources\views/layouts/app.blade.php ENDPATH**/ ?>
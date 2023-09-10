<!DOCTYPE html>
<html lang="en">

<head>
    <title>Palmy</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="<?= base_url('assets/') ?>images/Palmy.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/open-iconic-bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/animate.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/magnific-popup.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/aos.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/ionicons.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/jquery.timepicker.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/flaticon.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/icomoon.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css" />
    <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'id'
        }, 'google_translate_element');
    }
    </script>
    <script type="text/javascript" src="<?= base_url('assets/') ?>js/googletranslate.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('Home'); ?>">
                <img src="<?= base_url('assets/') ?>images/Palmy.png" width="50" /> &nbsp; Palmy
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a href="<?= base_url('Home'); ?>" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('About'); ?>" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('Gallery'); ?>" class="nav-link">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('Product'); ?>" class="nav-link">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('News'); ?>" class="nav-link">News & Events</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('Contact'); ?>" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item" style="position: relative;">
                        <div id="google_translate_element" style="position: relative; opacity: 0;"></div>
                        <button class="btn btn-light gtranslate"><span class="icon icon-translate"></span><span
                                class="text"> Pilih Bahasa</span></button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="home-slider js-fullheight owl-carousel">
        <div class="slider-item js-fullheight" style="background-image: url(assets/images/bg-1.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end"
                    data-scrollax-parent="true">
                    <div class="col-md-7 text ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <h2 class="mb-4" style="color: white; text-transform: uppercase;"
                            data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                            The future is an
                            assemble of today.
                            Hence be great to craft
                            your great future
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image: url(assets/images/bg-2.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end"
                    data-scrollax-parent="true">
                    <div class="col-md-7 text ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <h2 class="mb-4" style="color: white; text-transform: uppercase;"
                            data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                            Our industry respect tradition.. <br> But we challenge ourselves to innovate...
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image: url(assets/images/bg-3.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end"
                    data-scrollax-parent="true">
                    <div class="col-md-7 text ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <h2 class="mb-4" style="color: white; text-transform: uppercase;"
                            data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                            Enriching fruits appliances that support to all people
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image: url(assets/images/bg-4.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end"
                    data-scrollax-parent="true">
                    <div class="col-md-7 text ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <h2 class="mb-4" style="color: white; text-transform: uppercase;"
                            data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                            Utilize the sustainable productivities to the local people
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image: url(assets/images/bg-5.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end"
                    data-scrollax-parent="true">
                    <div class="col-md-7 text ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <h2 class="mb-4" style="color: white; text-transform: uppercase;"
                            data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                            Becoming the competitive, profitable, proffesional and transparent management
                        </h2>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="ftco-section ftc-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12 wrap-about md-5 ftco-animate text-center">
                    <div class="heading-section mb-5 md-5 heading-section-with-line">
                        <div class="md-5">
                            <span class="subheading">About Us</span>
                        </div>
                    </div>
                    <div class="md-5">
                        <p style="text-align: justify;">
                            Our company is leading agribusiness companies which also trading company of agricultural and
                            plantation products and focuses on the palm oil industry, We also innovate in waste products
                            turning into high economic value products, such as Palmrope, Palmesh etc.
                            We are committed Increasing the level of community welfare though empowering local
                            communities. <a href="<?= base_url('About'); ?>"> <i><b>Read More</b></i> </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftc-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12 wrap-about pb-md-5 ftco-animate text-center">
                    <div class="heading-section mb-5 md-5 heading-section-with-line">
                        <div class="md-5">
                            <span class="subheading">Our Products</span>
                        </div>
                    </div>
                    <div class="md-5 mb-5">
                        <p style="text-align: justify;">
                            Our innovative product made from Empty fruit bunch (EFB) is one of solid waste from
                            fruit palm oil. It's produces several products, namely: <i>Palmrope, Palmmesh,
                                Palmfiber, Palm Twine Nets, Palm Mat, Palmpeat, Palmfiber log, Palm Husk Chip
                            </i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row slickslider">
                    <?php foreach ($product as $p) { ?>
                    <div class="col">
                        <div class="blog-entry">
                            <a href="<?php echo site_url('product/detail_product/' . $p->product_id); ?>"
                                style="color: grey;" class="block-20 text-center">
                                <img src="<?= base_url('assets/images/product/' . $p->product_photo) ?>">
                            </a>
                            <h4 class="mt-3">
                                <?= $p->product_nama ?>
                            </h4>
                            <!-- <div class="desc">
                                </div> -->
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <!-- News -->
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12 wrap-about pb-md-5 ftco-animate text-center">
                    <div class="heading-section mb-5 md-5 heading-section-with-line">
                        <div class="md-5">
                            <span class="subheading">News & Events</span>
                        </div>
                    </div>
                    <div class="md-5 mb-5">
                        <p style="text-align: center;">
                            Check out our stories, news, and projects, so you can get to know us better
                        </p>
                    </div>
                </div>
            </div>

            <div class="row slicknews">
                <?php foreach ($news as $n) { ?>
                <div class="col">
                    <div class="blog-entry">
                        <a href="" class="block-20">
                            <img src="<?= base_url('assets/images/' . $n->tulisan_gambar) ?>">
                        </a>

                        <div class="text d-flex py-3">
                            <div class="meta mb-3">
                                <div><?= $n->tulisan_tanggal ?></div>
                                <div><?= $n->tulisan_author ?></div>
                                <div>
                                    <span class="icon-eye"></span>
                                    <?= $n->tulisan_views ?>
                                </div>
                            </div>
                            <div class="desc pl-3 text-left">
                                <h3 class="heading">
                                    <a href="<?php echo site_url('artikel/' . $n->tulisan_slug); ?>"><?= $n->tulisan_judul ?>
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <!-- End News -->
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="ftco-footer-widget mb-4" style="margin-top: 40px">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/images/mpa.png" width="40"> &nbsp; By Mandiri Palmera Agrindo
                        </a>
                    </div>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <li class="ftco-animate">
                            <a href="#"><span class="icon-twitter"></span></a>
                        </li>
                        <li class="ftco-animate">
                            <a href="#"><span class="icon-facebook"></span></a>
                        </li>
                        <li class="ftco-animate">
                            <a href="#"><span class="icon-instagram"></span></a>
                        </li>
                    </ul>
                </div>

                <div class="col-md">
                    <div class="ftco-footer-widget mb-5" style="margin-top: 50px">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li>
                                    <span class="icon icon-map-marker"></span><span class="text">Kebayoran Square
                                        Blok Q, Kav C-20, Kel. Pondok Jaya, Kec. Pondok Aren <br />
                                        Tangerang Selatan, Banten - 15220</span>
                                </li>
                                <li>
                                    <a href="#"><span class="icon icon-phone"></span><span class="text">(021) 5205000,
                                            5251008 Ext. 73146</span></a>
                                </li>
                                <li>
                                    <a href="mailto:marketing@palmy.co.id"><span class="icon icon-envelope"></span><span
                                            class="text">marketing@palmy.co.id</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>
                        Copyright &copy;
                        <script>
                        document.write(new Date().getFullYear());
                        </script>
                        PT Mandiri Palmera Agrindo
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="<?= base_url('assets/') ?>js/jquery.min.js"></script> -->
    <script src="<?= base_url('assets/') ?>js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/popper.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.easing.1.3.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.waypoints.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.stellar.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/aos.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.animateNumber.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap-datepicker.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.timepicker.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/scrollax.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/google-map.js"></script>
    <script src="<?= base_url('assets/') ?>js/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
    $('.slickslider').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    </script>
    <script type="text/javascript">
    $('.slicknews').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    </script>
</body>

</html>
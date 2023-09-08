<!DOCTYPE html>
<html lang="en">

<head>
    <title>Palmy | Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?= base_url('assets/') ?>images/Palmy.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/animate.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/aos.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/jquery.timepicker.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/icomoon.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">
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
                <img src="assets/images/Palmy.png" width="50" /> &nbsp; Palmy
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="<?= base_url('Home'); ?>" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="<?= base_url('About'); ?>" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="<?= base_url('Gallery'); ?>" class="nav-link">Gallery</a></li>
                    <li class="nav-item"><a href="<?= base_url('Products'); ?>" class="nav-link">Products</a></li>
                    <li class="nav-item"><a href="<?= base_url('News'); ?>" class="nav-link">News & Events</a></li>
                    <li class="nav-item active"><a href="<?= base_url('Contact'); ?>" class="nav-link">Contact</a></li>
                    <li class="nav-item" style="position: relative;">
                        <div id="google_translate_element" style="position: relative; opacity: 0;"></div>
                        <button class="btn btn-light gtranslate"><span class="icon icon-translate"></span><span class="text"> Pilih Bahasa</span></button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="home-slider js-fullheight owl-carousel">
        <div class="slider-item js-fullheight" style="background-image:url(assets/images/bg-4.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Contact</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url('Home') ?>">Home</a></span>
                            <span>Contact</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4">Contact Information</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3">
                    <p><span>Address:</span> Kebayoran Square
                        Blok Q, Kav C-20, Kel. Pondok Jaya, Kec. Pondok Aren, Kota Tangerang Selatan, Banten - 15220</p>
                </div>
                <div class="col-md-3">
                    <p><span>Phone:</span> <a href="tel://1234567920">(021) 5205000, 5251008 Ext. 73146</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">Gilang.ramadhan@mpa.co.id</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Website</span> <a href="#">yoursite.com</a></p>
                </div>
            </div>

            <div class="row block-9">
                <div class="col-md-6 order-md-last pr-md-5">
                    <form action="<?= base_url('Contact/kirim_pesan'); ?>" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="xnama" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="xemail" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="xphone" placeholder="Your Phone">
                        </div>
                        <div class="form-group">
                            <textarea cols="30" rows="5" name="xmessage" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                        <div><?php echo $this->session->flashdata('msg'); ?></div>
                    </form>

                </div>

                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.931622733015!2d106.71095067505854!3d-6.272721961405394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fa9ac4b69fc1%3A0x2d478d571717c217!2sRuko%20Kebayoran%20Square%20Business%20Park!5e0!3m2!1sid!2sid!4v1692892577790!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="ftco-footer-widget mb-4" style="margin-top: 40px">
                        <a class="navbar-brand" href="#">
                            <img src="<?= base_url('assets/') ?>images/mpa.png" width="40" /> &nbsp; Mandiri Palmera
                            Agrindo
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
                                    <a href="#"><span class="icon icon-envelope"></span><span class="text">Gilang.ramadhan@mpa.co.id</span></a>
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
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="<?= base_url('assets/') ?>js/jquery.min.js"></script>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="<?= base_url('assets/') ?>js/google-map.js"></script>
    <script src="<?= base_url('assets/') ?>js/main.js"></script>

</body>

</html>
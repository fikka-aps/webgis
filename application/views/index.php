<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Webgis</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?= template('assets/images/logo.ico') ?>" />
    <link href="assets/frontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/frontend/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/frontend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/frontend/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/frontend/assets/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>


    <!-- =======================================================
  * Template Name: Appland - v4.7.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top  header-transparent ">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="index.html">Webgis</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#pemetaan">Pemetaan</a></li>
                    <li><a class="nav-link scrollto" href="#data">Data</a></li>
                    <li><a class="getstarted scrollto" href="<?= base_url('login') ?>">Admin</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
                    <div>
                        <h1>Pemetaan Villa di Kecamatan Baturraden</h1>
                        <h2>Lorem ipsum dolor sit amet, tota senserit percipitur ius ut, usu et fastidii forensibus voluptatibus. His ei nihil feugait</h2>
                        <a href="#pemetaan" class="download-btn"><i class='bx bxs-map'></i> Pemetaan</a>
                        <a href="#data" class="download-btn"><i class='bx bxs-file-blank'></i> Data</a>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
                    <img src="assets/template/assets/images/logo.png" class="img-fluid mx-auto" width="350px" height="350px" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= App Features Section ======= -->
        <section id="pemetaan" class="features">
            <div class="container">

                <div class="section-title">
                    <h2>Pemetaan</h2>
                </div>

                <div class="row no-gutters">
                    <div class="col-md grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div id="map" style="height: 600px;"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End App Features Section -->

        <!-- ======= Details Section ======= -->


        <!-- ======= Testimonials Section ======= -->
        <section id="data" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Data</h2>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <?php foreach ($villa as $v) : ?>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                    <h3><?= $v['nama_villa'] ?></h3>
                                    <h4><?= $v['alamat_villa'] ?></h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="row mt-4 text-center">
                <div class="col justify-content-center">
                    <a class="btn btn-primary" href="<?= base_url('data') ?>">Selengkapnya >></a>
                </div>
            </div>
        </section><!-- End Testimonials Section -->



    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container py-4">
            <div class="copyright">
                <strong><span>Fikka Ayu Pamirtha Sary </span></strong>- H1D019044
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script>
        var map = L.map('map').setView([-7.319087, 109.232738], 14);

        var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(map);

        <?php foreach ($villa as $v) : ?>
            L.marker([<?= $v['latitude'] ?>, <?= $v['longitude'] ?>]).addTo(map)
                .bindPopup('<b><?= $v['nama_villa'] ?></b><br /><?= $v['alamat_villa'] ?>');
        <?php endforeach; ?>
    </script>

    <!-- Vendor JS Files -->
    <script src="assets/frontend/assets/vendor/aos/aos.js"></script>
    <script src="assets/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/frontend/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/frontend/assets/js/main.js"></script>

</body>

</html>
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
                    <li><a class="getstarted scrollto" href="<?= base_url('index#data') ?>">Back</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= App Features Section ======= -->
        <section id="villa" class="features">
            <div class="container">

                <div class="section-title">
                    <h2>Data Villa Baturraden</h2>
                </div>

                <div class="row no-gutters">
                    <div class="col-md grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered mt-3 bg-white">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Villa</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Pemilik</th>
                                            <th scope="col">Telepon</th>
                                            <th scope="col">Latitude</th>
                                            <th scope="col">Longitude</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($kecamatan as $kec) : ?>
                                            <tr>
                                                <th scope="row"><?= $i; ?></th>
                                                <td><?= $kec['nama_villa'] ?></td>
                                                <td><?= $kec['alamat_villa'] ?></td>
                                                <td><?= $kec['nama_pemilik'] ?></td>
                                                <td><?= $kec['no_telepon'] ?></td>
                                                <td><?= $kec['latitude'] ?></td>
                                                <td><?= $kec['longitude'] ?></td>
                                                <td>
                                                    <a href="<?= base_url('detail/' . $kec['id_villa']) ?>" class="btn btn-primary">detail</a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End App Features Section -->

        <!-- ======= Details Section ======= -->



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
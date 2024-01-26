<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Pemetaan </h3>
        </div>
        <div class="row">
            <div class="col-md grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div id="map" style="height: 600px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->

    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
        <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center">Fikka Ayu Pamirtha Sary - H1D019044</span>
        </div>
    </footer>
    <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
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

<script src="<?= template('assets/vendors/js/vendor.bundle.base.js') ?>"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?= template('assets/vendors/chart.js/Chart.min.js') ?>"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?= template('assets/js/off-canvas.js') ?>"></script>
<script src="<?= template('assets/js/hoverable-collapse.js') ?>"></script>
<script src="<?= template('assets/js/misc.js') ?>"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="<?= template('assets/js/chart.js') ?>"></script>
<!-- End custom js for this page -->

</body>

</html>
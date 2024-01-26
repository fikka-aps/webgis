<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Input Villa </h3>
        </div>
        <div class="row">
            <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Villa</h4>
                        <form method="POST" action="<?= base_url('tambah_villa') ?>">
                            <div class="form-group">
                                <label for="nama">Nama Villa</label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Villa" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" required>
                            </div>
                            <div class="form-group">
                                <label for="pemilik">Nama Pemilik</label>
                                <input type="text" name="pemilik" id="pemilik" class="form-control" placeholder="Nama Pemilik" required>
                            </div>
                            <div class="form-group">
                                <label for="telepon">Nomor Telepon</label>
                                <input type="text" name="telepon" id="telepon" class="form-control" placeholder="Nomor Telepon" required>
                            </div>
                            <div class="form-group">
                                <label for="Latitude">Latitude</label>
                                <input type="text" name="Latitude" id="Latitude" class="form-control" placeholder="Latitude" readonly required>
                            </div>
                            <div class="form-group">
                                <label for="Longitude">Longitude</label>
                                <input type="text" name="Longitude" id="Longitude" class="form-control" placeholder="Longitude" readonly required>
                            </div>
                            <button type="submit" class="btn btn-gradient-primary mr-2">Tambah</button>
                            <button type="reset" class="btn btn-light">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Lokasi Villa</h4>
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
    var map = L.map('map').setView([-7.319087, 109.232738], 16);

    var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1
    }).addTo(map);

    var marker = new L.marker([-7.319087, 109.232738], {
        draggable: true,
        autoPan: true
    }).addTo(map);

    marker.on('dragend', function(event) {
        var position = marker.getLatLng();
        marker.setLatLng(position, {
            draggable: 'true'
        }).bindPopup(position).update();
        $("#Latitude").val(position.lat);
        $("#Longitude").val(position.lng).keyup();
    });

    $("#Latitude, #Longitude").change(function() {
        var position = [parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
        marker.setLatLng(position, {
            draggable: 'true'
        }).bindPopup(position).update();
        mymap.panTo(position);
    });
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
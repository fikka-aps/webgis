<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Tambah Kecamatan </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('kecamatan') ?>">Kecamatan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Kecamatan</li>
                </ol>
            </nav>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form</h4>
                        <p class="card-description"> Tambah Kecamatan </p>
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Nama Kecamatan</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kode Kecamatan</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Kode">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputConfirmPassword1">Confirm Password</label>
                                <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-gradient-primary mr-2">Simpan</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
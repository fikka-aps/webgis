<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Kecamatan </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kecamatan</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <a href="" class="btn btn-primary " data-toggle="modal" data-target="#newKecamatanModalCenter">Tambah Kecamatan</a>
            <table class="table table-bordered mt-3 bg-white">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Kecamatan</th>
                        <th scope="col">Nama Kecamatan</th>
                        <th scope="col">GeoJson</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($kecamatan as $kec) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $kec['kd_kecamatan'] ?></td>
                            <td><?= $kec['nm_kecamatan'] ?></td>
                            <td><a href="<?= base_url('assets/geojson/' . $kec['geojson_kecamatan']) ?>" target="_BLANK"><?= $kec['geojson_kecamatan'] ?></a></td>
                            <td>
                                <a href="" class="badge badge-warning" data-toggle="modal" data-target="#editKecamatanModalCenter<?= $kec['id_kecamatan'] ?>">edit</a>
                                <a href="" class="badge badge-danger" data-toggle="modal" data-target="#deleteKecamatanModalCenter<?= $kec['id_kecamatan'] ?>">delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- content-wrapper ends -->

        <!-- Modal Add -->
        <div class="modal fade" id="newKecamatanModalCenter" tabindex="-1" role="dialog" aria-labelledby="newAdminModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newKecamatanModalLongTitle">Tambah Kecamatan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?= form_open_multipart('tambah_kecamatan'); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Nama Kecamatan</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="kode">Kode Kecamatan</label>
                            <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode">
                        </div>
                        <div class="form-group">
                            <label for="pict">GeoJson</label>
                            <input type="file" class="form-control" id="pict" name="pict" size="30">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Edit -->

        <?php foreach ($kecamatan as $kec) :  ?>
            <div class="modal fade" id="editKecamatanModalCenter<?= $kec['id_kecamatan'] ?>" tabindex="-1" role="dialog" aria-labelledby="editAdminModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editKecamatanModalLongTitle">Edit Kecamatan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?= form_open_multipart('editKecamatan'); ?>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="hidden" name="id" value=" <?= $kec['id_kecamatan'] ?>">
                                <label for="name">Nama Kecamatan</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?= $kec['nm_kecamatan'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="kode">Kode Kecamatan</label>
                                <input type="text" class="form-control" id="kode" name="kode" value="<?= $kec['kd_kecamatan'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="pict">GeoJson</label>
                                <input type="file" class="form-control" id="pict" name="pict" size="30">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- Modal Delete -->
        <?php foreach ($kecamatan as $kec) :  ?>
            <div class="modal fade" id="deleteKecamatanModalCenter<?= $kec['id_kecamatan'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteAdminModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteKecamatanModalLongTitle">Hapus Kecamatan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Yakin hapus Kecamatan ini?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                            <a href="<?= base_url('deleteKecamatan/' . $kec['id_kecamatan']) ?>" class="btn btn-danger">Yes</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
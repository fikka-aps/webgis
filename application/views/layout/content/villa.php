<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Data Villa </h3>
        </div>
        <div class="row">
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
                                <a href="<?= base_url('edit_villa/' . $kec['id_villa']) ?>" class="badge badge-warning">edit</a>
                                <a href="" class="badge badge-danger" data-toggle="modal" data-target="#deleteVillaModalCenter<?= $kec['id_villa'] ?>">delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Modal Delete -->
        <?php foreach ($kecamatan as $kec) :  ?>
            <div class="modal fade" id="deleteVillaModalCenter<?= $kec['id_villa'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteVillaModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteVillaModalLongTitle">Hapus VIlla</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Yakin hapus Data Villa ini?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                            <a href="<?= base_url('deleteVilla/' . $kec['id_villa']) ?>" class="btn btn-danger">Yes</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
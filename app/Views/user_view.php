<div class="container pt-5">
    <a href="<?= base_url('barang'); ?>" class="btn btn-info mb-2">Data Barang</a>
    <a href="<?= base_url('pelanggan'); ?>" class="btn btn-info mb-2">Data Pelanggan</a>
    <a href="<?= base_url('user'); ?>" class="btn btn-info mb-2">Data User</a>
    <a href="<?= base_url('level'); ?>" class="btn btn-info mb-2">Data Level</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data User</h4>
        </div>
        <div class="card-body">
            <a href="<?= base_url('user/addUser'); ?>" class="btn btn-success mb-2">Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama User</th>
                            <th>Level</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($users as $isi) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $isi['nama_user']; ?></td>
                                <td><?= $isi['nama_level']; ?></td>
                                <td>
                                    <a href="<?= base_url('user/edit/' . $isi['id_user']); ?>" class="btn btn-success">
                                        Edit</a>
                                    <a href="<?= base_url('user/destroyUser/' . $isi['id_user']); ?>" onclick="javascript:return confirm('Apakah ingin menghapus data User ?')" class="btn btn-danger">
                                        Hapus</a>

                                </td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
<div class="container pt-5">
    <a href="<?= base_url('barang'); ?>" class="btn btn-info mb-2">Data Barang</a>
    <a href="<?= base_url('pelanggan'); ?>" class="btn btn-info mb-2">Data Pelanggan</a>
    <a href="<?= base_url('user'); ?>" class="btn btn-info mb-2">Data User</a>
    <a href="<?= base_url('level'); ?>" class="btn btn-info mb-2">Data Level</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data Level</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($getLevel as $isi) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $isi['nama_level']; ?></td>
                                <td>
                                    <a href="<?= base_url('level/leveledit/' . $isi['id_level']); ?>" class="btn btn-success">
                                        Edit</a>
                                    <a href="<?= base_url('level/levelhapus/' . $isi['id_level']); ?>" onclick="javascript:return confirm('Apakah ingin menghapus data level ?')" class="btn btn-danger">
                                        Hapus</a>

                                </td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                    <a href="<?= base_url('level/leveltambah'); ?>" class="btn btn-success mb-2">Tambah Data</a>
                </table>
            </div>
        </div>
    </div>
</div>
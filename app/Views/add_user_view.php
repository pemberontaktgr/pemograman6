<div class="container p-5">
    <a href="<?= base_url('user'); ?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Tambah Data User</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('user/tambahuser'); ?>">
                <div class="form-group">
                    <label for="">Nama User</label>
                    <input type="text" name="nama" class="form-control" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Pilih Role</label>
                    <select name="id_level" class="form-control" aria-label="Default select example">
                        <option selected>----Select User Role---</option>
                        <?php foreach ($level as $val) :  ?>
                            <option value="<?= $val['id_level']; ?>"><?= $val['nama_level']; ?></option>
                        <?php endforeach;  ?>
                    </select>
                </div>
                <button name="submit" type="submit" class="btn btn-success">Add Data</button>
            </form>

        </div>
    </div>
</div>
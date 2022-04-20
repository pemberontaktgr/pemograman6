<div class="container p-5">
    <a href="<?= base_url('user'); ?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Add Data User</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('user/update'); ?>">
                <div class="form-group">
                    <label for="">Nama User</label>
                    <input type="text" value="<?= $user['nama_user']; ?>" name="nama" class="form-control" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Pilih Role</label>
                    <select name="id_level" class="form-control" aria-label="Default select example">
                        <?php foreach ($level as $val) :  ?>
                            <option value="<?= $val['id_level']; ?>" <?= $user['id_level'] == $val['id_level'] ? "selected" : null; ?>><?= $val['nama_level']; ?></option>
                        <?php endforeach;  ?>
                    </select>
                </div>
                <input type="hidden" name="id_user" value="<?= $user['id_user']; ?>" />
                <button name="submit" type="submit" class="btn btn-success">Update User</button>
            </form>

        </div>
    </div>
</div>
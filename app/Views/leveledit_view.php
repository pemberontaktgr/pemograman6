<div class="container p-5">
    <a href="<?= base_url('level'); ?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Level : <?= $level->nama_level; ?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('level/levelupdate'); ?>">
                <div class="form-group">
                    <label for="">Nama level</label>
                    <input type="text" value="<?= $level->nama_level; ?>" name="nama_level" required class="form-control">
                </div>
                <input type="hidden" value="<?= $level->id_level; ?>" name="id_level">
                <button class="btn btn-success">Edit Data</button>
            </form>

        </div>
    </div>
</div>
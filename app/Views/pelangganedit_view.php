<div class="container p-5">
    <a href="<?= base_url('pelanggan'); ?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Pelanggan : <?= $pelanggan->nama_pelanggan; ?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('pelanggan/pelangganupdate'); ?>">
                <div class="form-group">
                    <label for="">Nama Pelanggan</label>
                    <input type="text" value="<?= $pelanggan->nama_pelanggan; ?>" name="nama_pelanggan" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">No Telpon</label>
                    <input type="text" value="<?= $pelanggan->no_telpon; ?>" name="notelpon" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <input type="text" value="<?= $pelanggan->status; ?>" name="status" required class="form-control">
                </div>
                <input type="hidden" value="<?= $pelanggan->id_pelanggan; ?>" name="id_pelanggan">
                <button class="btn btn-success">Edit Data Pelanggan</button>
            </form>

        </div>
    </div>
</div>
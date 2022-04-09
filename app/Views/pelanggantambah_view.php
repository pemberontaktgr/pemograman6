<div class="container p-5">
    <a href="<?= base_url('pelanggan'); ?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Tambah Data Pelanggan</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('pelanggan/pelangganadd'); ?>">
                <div class="form-group">
                    <label for="">Nama Pelanggan</label>
                    <input type="text" name="namapelanggan" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">No Telpon</label>
                    <input type="text" name="notelpon" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <input type="text" name="status" class="form-control" required>
                </div>
                <button class="btn btn-success">Tambah Data Pelanggan</button>
            </form>

        </div>
    </div>
</div>
<?php $this->load->view('admin/template/header'); ?>
<?php $this->load->view('admin/template/sidebar'); ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Pelanggan</h1>
        <a href="<?= base_url('admin/pelanggan') ?>" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="card mb-4">
        <div class="card-header bg-light">
            <strong>Form Edit Pelanggan</strong>
        </div>
        <div class="card-body">
            <form action="<?= base_url('admin/pelanggan/edit/' . $pelanggan->id_pelanggan) ?>" method="POST">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Username <span class="text-danger">*</span></label>
                        <input type="text" name="username" class="form-control" value="<?= set_value('username', $pelanggan->username) ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nomor KWH <span class="text-danger">*</span></label>
                        <input type="text" name="nomor_kwh" class="form-control" value="<?= set_value('nomor_kwh', $pelanggan->nomor_kwh) ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Password Baru <small class="text-muted">(kosongkan jika tidak ingin mengubah)</small></label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Tarif Listrik <span class="text-danger">*</span></label>
                        <select name="id_tarif" class="form-select" required>
                            <option value="">Pilih Tarif</option>
                            <?php foreach ($tarifs as $tarif): ?>
                                <option value="<?= $tarif->id_tarif ?>" <?= set_select('id_tarif', $tarif->id_tarif, $pelanggan->id_tarif == $tarif->id_tarif) ?>>
                                    <?= $tarif->daya ?> VA - Rp <?= number_format($tarif->tarifperkwh, 0, ',', '.') ?>/KWH
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Konfirmasi Password Baru</label>
                        <input type="password" name="confirm_password" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Alamat <span class="text-danger">*</span></label>
                        <textarea name="alamat" class="form-control" rows="2" required><?= set_value('alamat', $pelanggan->alamat) ?></textarea>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nama Pelanggan <span class="text-danger">*</span></label>
                        <input type="text" name="nama_pelanggan" class="form-control" value="<?= set_value('nama_pelanggan', $pelanggan->nama_pelanggan) ?>" required>
                    </div>
                </div>
                <div class="mt-4 d-flex justify-content-end gap-2">
                    <a href="<?= base_url('admin/pelanggan') ?>" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Batal
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>

<?php $this->load->view('admin/template/footer'); ?> 
<?php $this->load->view('admin/template/header'); ?>
<?php $this->load->view('admin/template/sidebar'); ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Level Daya</h1>
        <a href="<?= base_url('admin/level') ?>" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="row">
        <!-- Form Edit -->
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header bg-light">
                    <strong class="text-primary">Form Edit Level Daya</strong>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/level/edit/' . $level->id_tarif) ?>" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Level Daya (VA) <span class="text-danger">*</span></label>
                                <input type="number" name="daya" class="form-control" value="<?= set_value('daya', $level->daya) ?>" required>
                                <small class="text-muted">Masukkan level daya dalam VA (Volt Ampere)</small>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Tarif per KWH (Rp) <span class="text-danger">*</span></label>
                                <input type="text" name="tarif_per_kwh" class="form-control" value="<?= set_value('tarif_per_kwh', number_format($level->tarifperkwh, 2, ',', '.')) ?>" required>
                                <small class="text-muted">Masukkan tarif per KWH dalam Rupiah</small>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Preview Tarif</label>
                            <div class="alert alert-info mb-0">
                                <strong>Level Daya:</strong> <?= set_value('daya', $level->daya) ?> VA &nbsp;&nbsp;
                                <strong>Tarif per KWH:</strong> Rp <?= number_format((float)str_replace(['.', ','], ['', '.'], set_value('tarif_per_kwh', $level->tarifperkwh)), 0, ',', '.') ?>
                            </div>
                        </div>
                        <div class="mt-4 d-flex justify-content-end gap-2">
                            <a href="<?= base_url('admin/level') ?>" class="btn btn-secondary">
                                <i class="fas fa-times"></i> Batal
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Update Level Daya
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Informasi Level -->
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header bg-light">
                    <strong class="text-primary">Informasi Level</strong>
                </div>
                <div class="card-body">
                    <div class="alert alert-info mb-2">
                        <strong>Data Saat Ini</strong><br>
                        <ul class="mb-0">
                            <li><strong>ID Level:</strong> <?= $level->id_tarif ?></li>
                            <li><strong>Level Daya:</strong> <?= $level->daya ?> VA</li>
                            <li><strong>Tarif per KWH:</strong> Rp <?= number_format($level->tarifperkwh, 0, ',', '.') ?></li>
                        </ul>
                    </div>
                    <div class="alert alert-warning mb-0">
                        <i class="fas fa-exclamation-triangle"></i>
                        <strong> Perhatian</strong><br>
                        Perubahan tarif akan mempengaruhi perhitungan tagihan pelanggan yang menggunakan level ini.
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $this->load->view('admin/template/footer'); ?> 
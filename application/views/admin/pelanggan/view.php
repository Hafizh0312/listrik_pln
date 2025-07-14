<?php $this->load->view('admin/template/header'); ?>
<?php $this->load->view('admin/template/sidebar'); ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Pelanggan</h1>
        <div>
            <a href="<?= base_url('admin/pelanggan/edit/' . $pelanggan->id_pelanggan) ?>" class="btn btn-warning">
                <i class="fas fa-edit"></i> Edit
            </a>
            <a href="<?= base_url('admin/pelanggan') ?>" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
    </div>

    <div class="row mb-3">
        <!-- Informasi Pelanggan -->
        <div class="col-md-7">
            <div class="card mb-3">
                <div class="card-header bg-light">
                    <i class="fas fa-user"></i> Informasi Pelanggan
                </div>
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-5">Nama Pelanggan</div>
                        <div class="col-7">: <?= $pelanggan->nama_pelanggan ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-5">Username</div>
                        <div class="col-7">: <?= $pelanggan->username ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-5">Nomor KWH</div>
                        <div class="col-7">: <span class="badge bg-info text-white"><?= $pelanggan->nomor_kwh ?></span></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-5">Alamat</div>
                        <div class="col-7">: <?= $pelanggan->alamat ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-5">Daya Listrik</div>
                        <div class="col-7">: <span class="badge bg-primary"><?= $pelanggan->daya ?> VA</span></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-5">Tarif per KWH</div>
                        <div class="col-7">: <span class="badge bg-success">Rp <?= number_format($pelanggan->tarifperkwh, 0, ',', '.') ?></span></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Statistik -->
        <div class="col-md-5">
            <div class="card mb-3">
                <div class="card-header bg-light">
                    <i class="fas fa-chart-bar"></i> Statistik
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-6">
                            <h4 class="text-primary"><?= $statistik['total_penggunaan'] ?? 0 ?></h4>
                            <div>Total Penggunaan</div>
                        </div>
                        <div class="col-6">
                            <h4 class="text-primary"><?= $statistik['total_tagihan'] ?? 0 ?></h4>
                            <div>Total Tagihan</div>
                        </div>
                    </div>
                    <hr>
                    <div class="row text-center">
                        <div class="col-6">
                            <h5 class="text-success"><?= $statistik['tagihan_lunas'] ?? 0 ?></h5>
                            <div>Tagihan Lunas</div>
                        </div>
                        <div class="col-6">
                            <h5 class="text-danger"><?= $statistik['tagihan_belum_lunas'] ?? 0 ?></h5>
                            <div>Tagihan Belum Bayar</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Riwayat Penggunaan -->
    <div class="card mb-3">
        <div class="card-header bg-light">
            <i class="fas fa-bolt"></i> Riwayat Penggunaan
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Periode</th>
                            <th>Meter Awal</th>
                            <th>Meter Akhir</th>
                            <th>Total KWH</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($penggunaan)): $no = 1; foreach ($penggunaan as $p): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= bulan_indo($p->bulan) . ' ' . $p->tahun ?></td>
                            <td><?= number_format($p->meter_awal, 0, ',', '.') ?> KWH</td>
                            <td><?= number_format($p->meter_ahir, 0, ',', '.') ?> KWH</td>
                            <td>
                                <span class="badge bg-info">
                                    <?= number_format($p->meter_ahir - $p->meter_awal, 0, ',', '.') ?> KWH
                                </span>
                            </td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr>
                            <td colspan="5" class="text-center text-muted">Belum ada data penggunaan</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Riwayat Tagihan -->
    <div class="card mb-3">
        <div class="card-header bg-light">
            <i class="fas fa-file-invoice"></i> Riwayat Tagihan
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Periode</th>
                            <th>Jumlah Meter</th>
                            <th>Total Tagihan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($tagihan)): $no = 1; foreach ($tagihan as $t): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= bulan_indo($t->bulan) . ' ' . $t->tahun ?></td>
                            <td><?= number_format($t->jumlah_meter ?? 0, 0, ',', '.') ?> KWH</td>
                            <td>Rp <?= number_format($t->jumlah_tagihan ?? 0, 0, ',', '.') ?></td>
                            <td>
                                <?php if ($t->status == 'Lunas'): ?>
                                    <span class="badge bg-success">Lunas</span>
                                <?php else: ?>
                                    <span class="badge bg-danger">Belum Bayar</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr>
                            <td colspan="5" class="text-center text-muted">Belum ada data tagihan</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?php $this->load->view('admin/template/footer'); ?> 
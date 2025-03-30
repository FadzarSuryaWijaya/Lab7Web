<?= $this->extend('layout/dashboard') ?>
<?= $this->section('content') ?>

<div class="container">
    <h1><?= esc($title); ?></h1>

    <!-- Flash Message -->
    <?php if (session()->getFlashdata('message')) : ?>
        <div class="alert alert-success" style="margin-bottom: 15px;">
            <?= session()->getFlashdata('message'); ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger" style="margin-bottom: 15px;">
            <?= session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>

    <a href="<?= base_url('/admin/artikel/add'); ?>" class="btn btn-success" style="margin-bottom: 15px;">
        Tambah Artikel
    </a>

    <table class="table-data" border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th style="text-align: center;">ID</th>
                <th style="text-align: left;">Judul</th>
                <th style="text-align: center;">Status</th>
                <th style="text-align: center;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($artikel && count($artikel) > 0) : ?>
                <?php foreach ($artikel as $row) : ?>
                    <tr>
                        <td style="text-align: center;"><?= esc($row['id']); ?></td>
                        <td>
                            <strong><?= esc($row['judul']); ?></strong>
                            <p style="margin: 5px 0;"><small><?= esc(substr(strip_tags($row['isi']), 0, 80)); ?>...</small></p>
                        </td>
                        <td style="text-align: center;">
                            <?= esc(ucfirst($row['status'] ?? 'Draft')); ?>
                        </td>
                        <td style="text-align: center;">
                            <a class="btn btn-primary" href="<?= base_url('/admin/artikel/edit/' . $row['id']); ?>" style="margin-right: 5px;">Edit</a>
                            <a class="btn btn-danger" href="<?= base_url('/admin/artikel/delete/' . $row['id']); ?>" onclick="return confirm('Yakin hapus artikel ini?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="4" style="text-align: center;">Tidak ada data artikel.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>

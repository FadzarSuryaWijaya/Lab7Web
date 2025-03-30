<?= $this->extend('layout/dashboard') ?>
<?= $this->section('content') ?>

<main class="container" style="padding: 20px;">
    <article class="entry">
        <h2><?= esc($artikel['judul']); ?></h2>

        <?php if (!empty($artikel['gambar'])) : ?>
            <img src="<?= base_url('gambar/' . esc($artikel['gambar'], 'url')); ?>"
                alt="<?= esc($artikel['judul']); ?>"
                style="max-width: 100%; height: auto; margin: 20px 0;">
        <?php endif; ?>

        <div class="content">
            <p><?= $artikel['isi']; ?></p>
        </div>
    </article>
</main>

<?= $this->endSection() ?>
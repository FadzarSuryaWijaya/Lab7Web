<?= $this->include('template/header'); ?>

<section id="content">
    <?php if ($artikel): ?>
        <?php foreach ($artikel as $row): ?>
            <article class="entry">
                <!-- Judul dengan link -->
                <h2>
                    <a href="<?= base_url('/artikel/' . $row['slug']); ?>">
                        <?= esc($row['judul']); ?>
                    </a>
                </h2>

                <!-- Cek gambar -->
                <?php if (!empty($row['gambar'])): ?>
                    <img src="<?= base_url('/gambar/' . $row['gambar']); ?>" alt="<?= esc($row['judul']); ?>" style="max-width: 100%; height: auto;">
                <?php endif; ?>

                <!-- Cuplikan isi -->
                <p>
                    <?= esc(substr(strip_tags($row['isi']), 0, 200)); ?>...
                </p>

                <!-- Tombol Baca Selengkapnya -->
                <a href="<?= base_url('/artikel/' . $row['slug']); ?>" class="read-more">Baca Selengkapnya</a>
            </article>
            <!-- <hr class="divider" /> -->
        <?php endforeach; ?>
    <?php else: ?>
        <article class="entry">
            <h2>Tidak ada artikel yang tersedia.</h2>
        </article>
    <?php endif; ?>
</section>

<?= $this->include('template/footer'); ?>

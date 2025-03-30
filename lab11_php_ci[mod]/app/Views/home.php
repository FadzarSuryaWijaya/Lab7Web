<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<!-- Featured Articles Section -->
<div class="featured-section">
    <h2><i class="fas fa-star"></i> Berita Utama</h2>
    <div class="featured-articles">
        <?php foreach ($featured as $item): ?>
        <div class="featured-article">
            <div class="article-image">
                <img src="<?= base_url('uploads/' . $item['gambar']) ?>" alt="<?= esc($item['judul']) ?>">
            </div>
            <h3 class="article-title">
                <a href="<?= site_url('artikel/detail/' . $item['slug']) ?>">
                    <?= esc($item['judul']) ?>
                </a>
            </h3>
            <div class="article-meta">
                <span><i class="far fa-clock"></i> <?= date('d M Y', strtotime($item['created_at'])) ?></span>
                <span><i class="far fa-user"></i> <span class="author">Admin</span></span>
                <span class="category">Kategori</span>
            </div>
            <p class="article-excerpt">
                <?= word_limiter(strip_tags($item['isi']), 30) ?> <!-- Limit 30 kata -->
            </p>
            <a href="<?= site_url(' /artikel/' . $item['slug']) ?>" class="read-more">Baca Selengkapnya</a>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Latest News Section -->
<h2 style="margin-bottom: 20px; border-bottom: 2px solid #eee; padding-bottom: 10px; color: #c00;">
    <i class="fas fa-newspaper"></i> Berita Terbaru
</h2>

<!-- Article List -->
<?php foreach ($artikels as $artikel): ?>
<article class="article">
    <h3 class="article-title">
        <a href="<?= site_url('artikel/detail/' . $artikel['slug']) ?>">
            <?= esc($artikel['judul']) ?>
        </a>
    </h3>
    <div class="article-meta">
        <span><i class="far fa-clock"></i> <?= date('d M Y', strtotime($artikel['created_at'])) ?></span>
        <span><i class="far fa-user"></i> <span class="author">Admin</span></span>
        <span class="category">Kategori</span>
    </div>
    <div class="article-image">
        <img src="<?= base_url('uploads/' . $artikel['gambar']) ?>" alt="<?= esc($artikel['judul']) ?>">
    </div>
    <p class="article-excerpt">
        <?= word_limiter(strip_tags($artikel['isi']), 40) ?> <!-- Limit 40 kata -->
    </p>
    <a href="<?= site_url('artikel/detail/' . $artikel['slug']) ?>" class="read-more">Baca Selengkapnya</a>
</article>
<?php endforeach; ?>

<!-- Pagination (Optional) -->
<div class="pagination">
    <a href="#">&laquo;</a>
    <a href="#" class="active">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">5</a>
    <a href="#">&raquo;</a>
</div>

<?= $this->endSection() ?>

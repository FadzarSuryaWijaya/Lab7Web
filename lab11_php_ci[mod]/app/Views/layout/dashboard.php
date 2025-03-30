<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'My Website' ?></title>
    <!-- Tambahkan link Google Fonts DI ATAS main.css -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('/assets/main.css'); ?>">
    </head>

<body>
    <div id="container">
        <header>
            <h1>Dashboard Admin Berita</h1>
        </header>
        <nav>
            <a href="<?= base_url('/admin/artikel'); ?>" class="<?= uri_string() === 'admin/artikel' ? 'active' : ''; ?>">Dashboard</a>
            <a href="<?= base_url('/artikel'); ?>" class="<?= uri_string() === 'artikel' ? 'active' : ''; ?>">Artikel</a>
            <a href="<?= base_url('/admin/artikel/add'); ?>" class="<?= uri_string() === 'admin/artikel/add' ? 'active' : ''; ?>">Tambah Artikel</a>
        </nav>
        <section id="wrapper">
            <section id="main">
                <?= $this->renderSection('content') ?>
            </section>
            <aside id="sidebar">
                <?= view_cell('App\\Cells\\ArtikelTerkini::render') ?>
                <div class="widget-box">
                    <h3 class="title">Widget Header</h3>
                    <ul>
                        <li><a href="#">Widget Link</a></li>
                        <li><a href="#">Widget Link</a></li>
                    </ul>
                </div>
                <div class="widget-box">
                    <h3 class="title">Widget Text</h3>
                    <p>Vestibulum lorem elit, iaculis in nisl volutpat,
                        malesuada tincidunt arcu. Proin in leo fringilla, vestibulum mi porta,faucibus felis. Integer pharetra est nunc, nec pretium
                        nunc pretium ac.
                    </p>
                </div>
            </aside>
        </section>
        <footer>
            <p>&copy; 2025 - Universitas Pelita Bangsa</p>
        </footer>
    </div>
</body>

</html>
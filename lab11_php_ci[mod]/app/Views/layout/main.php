<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Portal Berita' ?></title>
    <link rel="stylesheet" href="<?= base_url('/assets/main.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <div id="container">
        <!-- Topbar with date and social icons -->
        <div class="topbar">
            <div class="date">
                <?= date('l, d F Y'); ?>
            </div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        
        <!-- Header with site name -->
        <header>
            <h1>Portal Berita</h1>
        </header>
        
        <!-- Main navigation -->
        <nav>
            <a href="<?= base_url('/'); ?>" class="<?= uri_string() === '/' ? 'active' : ''; ?>">
                <i class="fas fa-home"></i> Home
            </a>
            <a href="<?= base_url('/artikel'); ?>" class="<?= uri_string() === '/artikel' ? 'active' : ''; ?>">
                <i class="fas fa-newspaper"></i> Artikel
            <a href="<?= base_url('/about'); ?>" class="<?= uri_string() === 'about' ? 'active' : ''; ?>">About</a>
            <a href="<?= base_url('/contact'); ?>" class="<?= uri_string() === 'contact' ? 'active' : ''; ?>">Kontak</a>
            <a href="<?= base_url('/admin/artikel'); ?>" class="<?= uri_string() === 'admin/artikel' ? 'active' : ''; ?>">Dashboard</a>
        </nav>
        
        <!-- Breaking news section -->
        <div class="breaking-news">
            <span>Breaking</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
        
        <!-- Main content wrapper -->
        <section id="wrapper">
            <!-- Main content area -->
            <section id="main">
                <?= $this->renderSection('content') ?>
            </section>
            
            <!-- Sidebar -->
            <aside id="sidebar">
                <!-- Search widget -->
                <div class="widget-box">
                    <h3 class="title">Pencarian</h3>
                    <div style="padding: 15px;">
                        <form action="<?= base_url('/search'); ?>" method="get">
                            <input type="text" name="q" placeholder="Cari artikel..." style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ddd;">
                            <button type="submit" class="btn btn-primary" style="width: 100%;">
                                <i class="fas fa-search"></i> Cari
                            </button>
                        </form>
                    </div>
                </div>
                
                <!-- Latest articles -->
                <div class="widget-box">
                    <h3 class="title">Artikel Terkini</h3>
                    <?= view_cell('App\\Cells\\ArtikelTerkini::render') ?>
                </div>
                
                <!-- Categories widget -->
                <div class="widget-box">
                    <h3 class="title">Kategori</h3>
                    <ul>
                        <li><a href="<?= base_url('/kategori/nasional'); ?>">Nasional</a></li>
                        <li><a href="<?= base_url('/kategori/internasional'); ?>">Internasional</a></li>
                        <li><a href="<?= base_url('/kategori/ekonomi'); ?>">Ekonomi</a></li>
                        <li><a href="<?= base_url('/kategori/teknologi'); ?>">Teknologi</a></li>
                        <li><a href="<?= base_url('/kategori/olahraga'); ?>">Olahraga</a></li>
                        <li><a href="<?= base_url('/kategori/hiburan'); ?>">Hiburan</a></li>
                    </ul>
                </div>
                
                <!-- Popular tags -->
                <div class="widget-box">
                    <h3 class="title">Tags Populer</h3>
                    <div style="padding: 15px;">
                        <a href="#" style="display: inline-block; background: #f2f2f2; padding: 5px 10px; margin: 3px; border-radius: 3px; text-decoration: none; color: #444; font-size: 0.9rem;">Politik</a>
                        <a href="#" style="display: inline-block; background: #f2f2f2; padding: 5px 10px; margin: 3px; border-radius: 3px; text-decoration: none; color: #444; font-size: 0.9rem;">Ekonomi</a>
                        <a href="#" style="display: inline-block; background: #f2f2f2; padding: 5px 10px; margin: 3px; border-radius: 3px; text-decoration: none; color: #444; font-size: 0.9rem;">COVID-19</a>
                        <a href="#" style="display: inline-block; background: #f2f2f2; padding: 5px 10px; margin: 3px; border-radius: 3px; text-decoration: none; color: #444; font-size: 0.9rem;">Pendidikan</a>
                        <a href="#" style="display: inline-block; background: #f2f2f2; padding: 5px 10px; margin: 3px; border-radius: 3px; text-decoration: none; color: #444; font-size: 0.9rem;">Teknologi</a>
                    </div>
                </div>
                
                <!-- Newsletter widget -->
                <div class="widget-box">
                    <h3 class="title">Langganan Berita</h3>
                    <div style="padding: 15px;">
                        <p style="margin-bottom: 10px;">Dapatkan berita terbaru langsung ke email Anda.</p>
                        <form action="#" method="post">
                            <input type="email" name="email" placeholder="Email Anda" required style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ddd;">
                            <button type="submit" class="btn btn-primary" style="width: 100%;">
                                <i class="fas fa-envelope"></i> Langganan
                            </button>
                        </form>
                    </div>
                </div>
            </aside>
        </section>
        
        <!-- Footer -->
        <footer>
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Tentang Kami</h3>
                    <p>Portal Berita adalah sumber berita terpercaya yang menyajikan informasi terbaru dan akurat dari berbagai kategori seperti nasional, internasional, ekonomi, teknologi, dan lainnya.</p>
                </div>
                
                <div class="footer-section">
                    <h3>Kategori</h3>
                    <ul>
                        <li><a href="#">Nasional</a></li>
                        <li><a href="#">Internasional</a></li>
                        <li><a href="#">Ekonomi</a></li>
                        <li><a href="#">Teknologi</a></li>
                        <li><a href="#">Olahraga</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Hubungi Kami</h3>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Jl. Contoh No. 123, Jakarta</li>
                        <li><i class="fas fa-phone"></i> +62 123 4567 890</li>
                        <li><i class="fas fa-envelope"></i> info@portalberita.com</li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Ikuti Kami</h3>
                    <div style="margin-top: 15px;">
                        <a href="#" style="color: #fff; font-size: 20px; margin-right: 15px;"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" style="color: #fff; font-size: 20px; margin-right: 15px;"><i class="fab fa-twitter"></i></a>
                        <a href="#" style="color: #fff; font-size: 20px; margin-right: 15px;"><i class="fab fa-instagram"></i></a>
                        <a href="#" style="color: #fff; font-size: 20px;"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; <?= date('Y'); ?> - Portal Berita | Universitas Pelita Bangsa</p>
            </div>
        </footer>
    </div>
</body>
</html>
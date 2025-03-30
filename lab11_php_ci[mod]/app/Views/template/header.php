<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/assets/main.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
    <div id="container">
        <header>
            <h1>Portal Berita</h1>
        </header>
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
        <section id="wrapper">
            <section id="main">
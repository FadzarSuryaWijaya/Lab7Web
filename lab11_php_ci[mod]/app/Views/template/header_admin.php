<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= esc($title); ?></title>
    <link rel="stylesheet" href="<?= base_url('/assets/main.css'); ?>">
</head>

<body>
    <div id="container">
        <!-- Header -->
        <header>
            <h1>Dashboard Admin Berita</h1>
        </header>

        <!-- Navigation -->
        <nav>
            <a href="<?= base_url('/admin/artikel'); ?>" class="<?= uri_string() === 'admin/artikel' ? 'active' : ''; ?>">Dashboard</a>
            <a href="<?= base_url('/artikel'); ?>" class="<?= uri_string() === 'artikel' ? 'active' : ''; ?>">Artikel</a>
            <a href="<?= base_url('/admin/artikel/add'); ?>" class="<?= uri_string() === 'admin/artikel/add' ? 'active' : ''; ?>">Tambah Artikel</a>
        </nav>

        <!-- Main Content -->
        <section id="wrapper">
            <section id="main">

Siap! Berikut gue buatin **struktur dokumentasi** dan **template README.md** buat repo GitHub kamu. Udah gue susun biar rapi dan gampang diikutin.

---

## 📁 Struktur Folder Project di Repo GitHub
```
Lab7Web/
├── ci4/                    # Project CodeIgniter 4
├── screenshots/            # Folder gambar hasil praktikum (screenshot)
│   ├── langkah1_installasi.png
│   ├── langkah2_routing.png
│   └── ...
├── docs/                   # (Optional) Laporan formal versi PDF/DOCX (buat dosen)
│   └── laporan-praktikum.pdf
└── README.md               # Dokumentasi praktikum (versi GitHub)
```

---

## 📝 Template `README.md`

```markdown
# Lab7Web - Praktikum 1: PHP Framework (CodeIgniter 4)

## 📚 Deskripsi
Repositori ini merupakan hasil praktikum Lab7Web - PHP Framework menggunakan **CodeIgniter 4**. Praktikum mencakup pemahaman dasar framework, konsep MVC, routing, controller, view, serta pembuatan layout sederhana dengan CSS.

---

## 📝 Daftar Isi
1. [Deskripsi](#deskripsi)
2. [Daftar Isi](#daftar-isi)
3. [Instalasi & Requirement](#instalasi--requirement)
4. [Struktur Direktori Project](#struktur-direktori-project)
5. [Langkah Praktikum](#langkah-praktikum)
    - [Persiapan Awal](#1-persiapan-awal)
    - [Instalasi CodeIgniter 4](#2-instalasi-codeigniter-4)
    - [Menjalankan CodeIgniter lewat CLI](#3-menjalankan-codeigniter-lewat-cli)
    - [Mengaktifkan Debugging](#4-mengaktifkan-debugging)
    - [Routing & Controller](#5-routing--controller)
    - [Membuat View](#6-membuat-view)
    - [Layout Web dengan CSS](#7-layout-web-dengan-css)
6. [Tugas Tambahan](#tugas-tambahan)
7. [Penjelasan Screenshots](#penjelasan-screenshots)
8. [Author](#author)
9. [License](#license)

---

## ⚙️ Instalasi & Requirement
- PHP >= 7.3
- Ekstensi PHP aktif:
  - intl
  - curl (opsional)
  - json
  - mysqlnd
  - xml
- Web Server: Apache (XAMPP)
- Composer (untuk manajemen dependensi)
- CodeIgniter 4 (versi terbaru)

---

## 📂 Struktur Direktori Project
```
ci4/
├── app/                # Source Code aplikasi (MVC)
├── public/             # Root direktori web (index.php, assets CSS/JS)
├── system/             # Core CodeIgniter
├── writable/           # Temp folder (cache, logs, uploads)
├── .env                # Konfigurasi environment
└── composer.json       # Dependency manager config
```

---

## 🚀 Langkah Praktikum

### 1. Persiapan Awal
- Aktifkan ekstensi PHP melalui `php.ini`.
- Siapkan folder praktikum di `htdocs`:
  ```bash
  mkdir lab11_php_ci
  cd lab11_php_ci
  ```

### 2. Instalasi CodeIgniter 4
- Unduh CodeIgniter 4: [https://codeigniter.com/download](https://codeigniter.com/download)
- Ekstrak ke folder:
  ```
  htdocs/lab11_php_ci/ci4
  ```
- Akses di browser:
  ```
  http://localhost/lab11_php_ci/ci4/public/
  ```

📸 ![Tampilan halaman awal CodeIgniter](screenshots/langkah1_installasi.png)

### 3. Menjalankan CodeIgniter lewat CLI
- Jalankan terminal di folder `ci4`:
  ```bash
  cd ci4
  php spark serve
  ```
- Akses di browser:
  ```
  http://localhost:8080/
  ```

📸 ![Tampilan hasil php spark serve](screenshots/langkah2_cli.png)

### 4. Mengaktifkan Debugging
- Edit file `.env`:
  ```
  CI_ENVIRONMENT = development
  ```

### 5. Routing & Controller
- Edit `app/Config/Routes.php`:
  ```php
  $routes->get('/about', 'Page::about');
  ```
- Buat controller `Page.php` di folder `app/Controllers`:
  ```php
  <?php
  namespace App\Controllers;
  
  class Page extends BaseController {
      public function about() {
          return view('about');
      }
  }
  ```
📸 ![Routing Controller Page](screenshots/langkah3_routing.png)

### 6. Membuat View
- Buat file `about.php` di `app/Views/`:
  ```php
  <h1>About Page</h1>
  <p>Ini adalah halaman about</p>
  ```
📸 ![View about.php](screenshots/langkah4_view.png)

### 7. Layout Web dengan CSS
- Simpan file CSS di `public/assets/css/style.css`
- Tambahkan template header & footer:
  - `app/Views/template/header.php`
  - `app/Views/template/footer.php`
- Load view di controller:
  ```php
  return view('template/header')
       . view('about')
       . view('template/footer');
  ```

📸 ![Layout dengan CSS](screenshots/langkah5_css.png)

---

## ✅ Tugas Tambahan
- Lengkapi controller `Page` untuk menu lainnya: `contact`, `home`, dll.
- Tambahkan tampilan view di folder `Views/`.

---

## 🖼️ Penjelasan Screenshots
| Langkah                    | Screenshot                                    |
|----------------------------|-----------------------------------------------|
| Instalasi CI4              | ![Instalasi](screenshots/langkah1_installasi.png) |
| Menjalankan php spark serve| ![CLI](screenshots/langkah2_cli.png)             |
| Routing Page Controller    | ![Routing](screenshots/langkah3_routing.png)     |
| View About                 | ![View](screenshots/langkah4_view.png)           |
| Layout + CSS               | ![Layout](screenshots/langkah5_css.png)          |

---

## 👨‍💻 Author
- Nama: [Nama Kamu]
- NIM: [NIM Kamu]
- Kelas: [Kelas Kamu]

---

## 📝 License
MIT License (Optional)

---

## 🔗 Link Repository
> Kirim link ini ke e-learning eCampus:
```
https://github.com/username/Lab7Web
```
---

## 📌 Catatan
- Pastikan semua gambar sudah diupload ke folder `screenshots/`
- Commit dengan message yang jelas, contoh:
  ```
  git commit -m "Menambahkan routing dan view halaman about"
  ```

---

Kalau mau ada tambahan `docs/laporan-praktikum.pdf` buat laporan formal, tinggal lo generate dari isi README di atas, tambahin styling formal (cover, daftar isi, bab-bab).

---

## 🚀 Tips Deploy
- Biar lebih keren, kamu bisa upload project ke server hosting/Heroku/Vercel (optional).

---

Kalau ada yang mau dikustom lagi, bilang aja!  
Mau gue buatin template `laporan formal` juga?

```
Lab7Web/
├── ci4/
│   ├── app/
│   ├── public/
│   └── ... (struktur CodeIgniter 4)
├── README.md
└── screenshot/
    ├── step1.png
    ├── step2.png
    └── ...

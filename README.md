# 📄 **Laporan Praktikum Pemrograman Web 2 - Lab 7 Web**  
### **Framework CodeIgniter 4** 🔥

---

## 🎯 **Tujuan Praktikum**
1. ✅ Memahami konsep dasar **Framework** dalam pengembangan aplikasi web.
2. ✅ Memahami konsep dasar **MVC (Model-View-Controller)** pada Framework CodeIgniter 4.
3. ✅ Mampu menginstalasi dan mengimplementasikan **Framework CodeIgniter 4** dalam membuat aplikasi web sederhana.
4. ✅ Meningkatkan kemampuan dalam menggunakan **Routing, Controller, View**, dan **Layout Template** pada CodeIgniter 4.
5. ✅ Menerapkan **best practice coding** pada pengembangan aplikasi berbasis framework.

---

## 🛠️ **Alat dan Bahan**
### Software 💻
- 🔹 **XAMPP** (PHP >= 7.4)
- 🔹 **Visual Studio Code** (VSCode)
- 🔹 **Git** (optional untuk version control)
- 🔹 **Browser** (Chrome/Firefox/Edge)

### Bahan 📚
- 📂 Framework **CodeIgniter 4**
- 📑 Modul Praktikum Pemrograman Web 2
- 🌐 Koneksi internet (untuk download & referensi)

---

## 📝 **Instruksi Praktikum**
1. 🚀 Pastikan **XAMPP** telah terinstal dan **Apache** berjalan.
2. ✍️ Persiapkan text editor seperti **VSCode**.
3. 🗂️ Buat folder baru di direktori `htdocs` dengan nama `lab11_php_ci`.
4. 📖 Ikuti langkah-langkah praktikum berikut.

---

## 🔧 **Langkah-Langkah Praktikum**

### 4.1 ⚙️ **Persiapan Lingkungan**
- **Aktifkan ekstensi PHP yang dibutuhkan**:
  - ✅ `php-json`
  - ✅ `php-mysqlnd`
  - ✅ `php-xml`
  - ✅ `php-intl`
  - ✅ `libcurl` (optional)

📝 **Langkah:**
1. Buka **XAMPP Control Panel** → `Config` → `PHP (php.ini)`.
2. Cari ekstensi yang dibutuhkan, hilangkan `;` di depannya.
3. Save dan **restart Apache**.

⚠️ **Catatan Penting**:
- Pastikan **tidak ada error** saat Apache di-restart.
- PHP minimal versi **7.4**.

📸 **Screenshot**:
- ✅ Tampilan **XAMPP Control Panel**
- ✅ File `php.ini` setelah aktivasi ekstensi
- ✅ Apache berjalan sukses ✔️

---

### 4.2 📥 **Instalasi CodeIgniter 4**
1. Download dari [👉 CodeIgniter Download](https://codeigniter.com/download)
2. Ekstrak ke `htdocs/lab11_php_ci`
3. Rename folder jadi `ci4`

🌐 **Akses awal**:  
`http://localhost/lab11_php_ci/ci4/public`  
➡️ Pastikan muncul halaman **"Welcome to CodeIgniter 4!"**

📸 **Screenshot**:
- ✅ Halaman download CodeIgniter  
- ✅ Struktur folder `ci4` di `htdocs`  
- ✅ Tampilan awal CI4 di browser  

---

### 4.3 💻 **Menjalankan CLI CodeIgniter 4**
- Buka **Command Prompt/Terminal**  
- Masuk ke direktori `ci4`  
  ```bash
  cd xampp/htdocs/lab11_php_ci/ci4
  ```  
- Jalankan command:  
  ```bash
  php spark
  ```  
➡️ Tampil daftar command CLI CI4

📸 **Screenshot**:  
- ✅ Terminal di direktori project  
- ✅ Output `php spark` CLI  

---

### 4.4 🐞 **Mengaktifkan Mode Debugging**
- Rename `env` → `.env`  
- Edit `.env`:
  ```ini
  CI_ENVIRONMENT = development
  ```
- Simulasi error: hapus titik koma di `Home.php`

⚠️ **Tujuan**: Debugging akan menampilkan **error details** di browser.

📸 **Screenshot**:  
- ✅ File `.env` di root  
- ✅ Konfigurasi `CI_ENVIRONMENT`  
- ✅ Error tampilan browser dengan mode debug aktif  

---

### 4.5 📂 **Struktur Direktori CodeIgniter 4**
📁 Struktur folder utama:
- `app/` → Folder aplikasi MVC  
- `public/` → Root akses browser  
- `writable/` → Cache, log, upload  
- `vendor/` → Composer dependencies  
- `tests/` → Unit testing  
- `.env`, `spark` → Env & CLI

📸 **Screenshot**:
- ✅ Struktur direktori dari VSCode/File Explorer  

---

### 4.6 🏗️ **Memahami Konsep MVC**
🎨 **Model-View-Controller**:
- **Model** → Data & logic bisnis  
- **View** → Tampilan ke user  
- **Controller** → Penghubung Model & View

📝 **Catatan**:  
➡️ Mempermudah maintenance  
➡️ Struktur aplikasi lebih terorganisir  

---

### 4.7 🗺️ **Routing dan Controller**
- Edit `app/Config/Routes.php`:  
  ```php
  $routes->get('/about', 'Page::about');
  $routes->get('/contact', 'Page::contact');
  $routes->get('/faqs', 'Page::faqs');
  ```

- Cek routing:  
  ```bash
  php spark routes
  ```

- Buat controller `Page.php`:
  ```php
  <?php
  namespace App\Controllers;

  class Page extends BaseController
  {
      public function about() { echo "Ini halaman About"; }
      public function contact() { echo "Ini halaman Contact"; }
      public function faqs() { echo "Ini halaman FAQ"; }
  }
  ```

🌐 Akses di browser:  
- `/about`  
- `/contact`  
- `/faqs`

📸 **Screenshot**:  
- ✅ Routes.php  
- ✅ CLI routes  
- ✅ Controller `Page.php`  
- ✅ Browser output  

---

### 4.8 ⚡ **Auto Routing**
- Tambahkan method `tos()` di `Page.php`:
  ```php
  public function tos() { echo "Ini halaman Terms of Service"; }
  ```

- Akses:  
  - `http://localhost:8080/page/tos`

📸 **Screenshot**:  
- ✅ Kode `tos()`  
- ✅ Browser output halaman Terms of Service  

---

### 4.9 🖼️ **Membuat View**
- Buat `about.php` di `Views`:
  ```html
  <h1>Tentang Kami</h1>
  <p>Ini adalah halaman About.</p>
  ```

- Ubah `Page::about()`:
  ```php
  public function about() { return view('about'); }
  ```

📸 **Screenshot**:  
- ✅ File `about.php`  
- ✅ Controller dipanggil view  
- ✅ Browser output halaman about  

---

### 4.10 🎨 **Membuat Layout Template + CSS**
- Buat `public/style.css`  
- Buat `Views/template/header.php`:
  ```php
  <!DOCTYPE html>
  <html>
  <head>
      <link rel="stylesheet" href="<?= base_url('style.css'); ?>">
  </head>
  <body>
      <header><h1>My Web</h1></header>
      <nav>
          <a href="/about">About</a> |
          <a href="/contact">Contact</a> |
          <a href="/faqs">FAQs</a>
      </nav>
  ```

- Buat `footer.php`:
  ```php
      <footer><p>&copy; 2025 Web Programming</p></footer>
  </body>
  </html>
  ```

- Gunakan di `about.php`:
  ```php
  <?= view('template/header'); ?>
  <h2>About Us</h2>
  <p>This is the about page.</p>
  <?= view('template/footer'); ?>
  ```

📸 **Screenshot**:  
- ✅ Header & Footer  
- ✅ Halaman about terintegrasi  
- ✅ Browser output  

---

### 4.11 ✅ **Menyelesaikan Tugas**
- Tambahkan method di `Page.php`:
  ```php
  public function artikel() { return view('artikel'); }
  public function kontak() { return view('kontak'); }
  ```

- Buat file:
  - `artikel.php`
  - `kontak.php`

- Update navigasi `header.php`

📸 **Screenshot**:  
- ✅ Controller `artikel()` & `kontak()`  
- ✅ Views artikel & kontak  
- ✅ Browser menu navigasi lengkap  

---

## 📚 **Kesimpulan**
- ✅ Framework CodeIgniter 4 memudahkan pembuatan aplikasi web berbasis **MVC**.
- ✅ Fitur **Routing, Controller, View** serta **Template Layout** membuat pengembangan lebih cepat & rapi.
- ✅ Praktikum ini melatih penggunaan dasar CI4 yang esensial bagi pengembangan web modern.

---

## 🚧 **Kendala & Solusi**
| ⚠️ **Kendala**                        | ✅ **Solusi**                                              |
|---------------------------------------|------------------------------------------------------------|
| Apache gagal running di XAMPP         | Tutup aplikasi lain yg pakai port 80 (Skype/IIS).         |
| Route baru tidak bisa diakses         | Pastikan routing benar & controller sesuai di `Routes.php` |
| Auto Routing tidak aktif              | Enable Auto Routing di `app/Config/Feature.php`           |
| `.env` tidak muncul di VSCode         | Aktifkan `Show Hidden Files` di VSCode/File Explorer      |

---

## 🔗 **Referensi**
1. [📘 Dokumentasi CodeIgniter 4](https://codeigniter.com/user_guide/)
2. 📒 Modul Praktikum Pemrograman Web 2  
3. [PHP Manual](https://www.php.net/manual/en/)  
4. [XAMPP for Windows](https://www.apachefriends.org/index.html)

---

## 📂 **Catatan Tambahan**
- Simpan dokumentasi sebagai `README.md` di project root `Lab7Web`.
- Gunakan Git untuk version control:
  ```bash
  git init
  git add .
  git commit -m "Lab 7 CodeIgniter 4 selesai 🚀"
  git remote add origin https://github.com/username/Lab7Web.git
  git push -u origin main
  ```
- Submit link repository ke **eCampus** ✅

---
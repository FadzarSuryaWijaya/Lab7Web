<?= $this->include('template/header_admin'); ?>

<h2><?= esc($title); ?></h2>

<form action="" method="post">
    <!-- CSRF Protection -->
    <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />

    <!-- Judul -->
    <p>
        <label for="judul">Judul Artikel</label><br>
        <input 
            type="text" 
            name="judul" 
            id="judul" 
            value="<?= esc($data['judul'] ?? '') ?>" 
            placeholder="Masukkan judul artikel"
            class="form-control"
            required
        >
    </p>

    <!-- Isi Artikel -->
    <p>
        <label for="isi">Isi Artikel</label><br>
        <textarea 
            id="isi" 
            name="isi" 
            cols="50" 
            rows="10"
            placeholder="Tulis isi artikel..."
            required
        ><?= $data['isi'] ?? '' ?></textarea>
    </p>

    <!-- Tombol Kirim -->
    <p>
        <input type="submit" value="Kirim" class="btn btn-primary">
    </p>
</form>

<!-- Script CKEditor 5 Classic -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#isi'), {
            toolbar: [ 'heading', '|', 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote' ],
        })
        .catch(error => {
            console.error(error);
        });
</script>

<?= $this->include('template/footer_admin'); ?>

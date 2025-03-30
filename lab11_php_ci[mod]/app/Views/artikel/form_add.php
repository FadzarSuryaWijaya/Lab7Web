<?= $this->include('template/header_admin'); ?>
<h2><?= $title; ?></h2>

<form action="" method="post">
    <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
    
    <p>
        <label for="judul">Judul Artikel</label><br>
        <input type="text" name="judul" id="judul" value="<?= esc($data['judul'] ?? '') ?>" placeholder="Masukkan judul artikel" required>
    </p>
    
    <p>
        <label for="isi">Isi Artikel</label><br>
        <textarea name="isi" id="isi" cols="50" rows="10" placeholder="Tulis isi artikel..." required><?= $data['isi'] ?? '' ?></textarea>
    </p>
    
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

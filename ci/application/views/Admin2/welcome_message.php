
<body>
    <?= form_open_multipart('prosesUpload'); ?>
    <p>File Gambar</p>
    <input type="file" name="gambar[]" multiple><br><br>
    <button>Upload Gambar</button>
    <?= form_close(); ?>
    
</body>
</html>
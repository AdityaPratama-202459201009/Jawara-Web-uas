<?php
//dibuat oleh bintang
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Kategori</title>
</head>
<body>

<h2>Edit Kategori</h2>

<form method="POST">

    <label>Nama Kategori</label><br>
    <input
        type="text"
        name="nama_kategori"
        value="<?= $data['kategori']['nama_kategori']; ?>"
        required
    >

    <br><br>

    <button type="submit">
        Simpan Perubahan
    </button>

</form>

<br>

<a href="index.php?page=kategori">
    Kembali
</a>

</body>
</html>
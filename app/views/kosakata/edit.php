<?php
//dibuat oleh bintang
?>
<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<title>Edit Kosakata</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-warning">

<h4>Edit Kosakata</h4>

</div>

<div class="card-body">

<form method="POST">

<div class="mb-3">

<label>Kata Jawa</label>

<input
type="text"
name="kata_jawa"
class="form-control"
value="<?= $data['kosakata']['kata_jawa']; ?>">

</div>

<div class="mb-3">

<label>Arti Indonesia</label>

<input
type="text"
name="arti_indonesia"
class="form-control"
value="<?= $data['kosakata']['arti_indonesia']; ?>">

</div>

<div class="mb-3">

<label>Kategori</label>

<select
name="kategori_id"
class="form-select">

<?php foreach($data['kategori'] as $kategori): ?>

<option
value="<?= $kategori['id']; ?>"
<?= ($kategori['id']==$data['kosakata']['kategori_id']) ? "selected" : ""; ?>>

<?= $kategori['nama_kategori']; ?>

</option>

<?php endforeach; ?>

</select>

</div>

<button class="btn btn-warning">

Update

</button>

<a href="index.php?page=kosakata"
class="btn btn-secondary">

Kembali

</a>

</form>

</div>

</div>

</div>

</body>

</html>
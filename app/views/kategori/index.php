<?php
//dibuat oleh bintang
?>
<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<title>Daftar Kategori</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<h2 class="mb-4">

📂 Daftar Kategori

</h2>

<a href="index.php?page=tambahKategori"

class="btn btn-success mb-3">

+ Tambah Kategori

</a>

<table class="table table-bordered table-hover bg-white">

<thead class="table-success">

<tr>

<th width="60">No</th>

<th>Nama Kategori</th>

<th width="170">Aksi</th>

</tr>

</thead>

<tbody>

<?php $no=1; ?>

<?php foreach($data['kategori'] as $kategori): ?>

<tr>

<td><?= $no++; ?></td>

<td><?= $kategori['nama_kategori']; ?></td>

<td>

<a

href="index.php?page=editKategori&id=<?= $kategori['id']; ?>"

class="btn btn-warning btn-sm">

Edit

</a>

<a

href="index.php?page=hapusKategori&id=<?= $kategori['id']; ?>"

class="btn btn-danger btn-sm"

onclick="return confirm('Yakin hapus?')">

Hapus

</a>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>

</body>

</html>
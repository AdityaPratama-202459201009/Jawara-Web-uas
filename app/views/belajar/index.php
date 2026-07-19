<?php require_once __DIR__ . "/../layout/header.php"; ?>

<h2 class="mb-4">📚 Belajar Bahasa Jawa</h2>

<div class="row">

<?php foreach($data['kategori'] as $kategori): ?>

<div class="col-md-4 mb-4">

<div class="card shadow">

<div class="card-body text-center">

<h4><?= $kategori['nama_kategori']; ?></h4>

<a href="index.php?page=detailBelajar&id=<?= $kategori['id']; ?>" class="btn btn-success mt-3">

Mulai Belajar

</a>

</div>

</div>

</div>

<?php endforeach; ?>

</div>

<?php require_once __DIR__ . "/../layout/footer.php"; ?>
<?php require_once __DIR__ . "/../layout/header.php"; ?>

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2>📖 Daftar Kosakata</h2>

    <a href="index.php?page=tambahKosakata" class="btn btn-success">
        + Tambah Kosakata
    </a>

</div>

<form method="GET" action="index.php" class="mb-4">

    <input type="hidden" name="page" value="kosakata">

    <div class="row">

        <div class="col-md-10">

            <input
                type="text"
                name="keyword"
                class="form-control"
                placeholder="Cari kata Jawa atau arti Indonesia..."
                value="<?= isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : '' ?>">

        </div>

        <div class="col-md-2 d-grid">

            <button class="btn btn-primary">

                🔍 Cari

            </button>

        </div>

    </div>

</form>

<?php if(isset($_GET['keyword']) && $_GET['keyword'] != ""): ?>

<div class="alert alert-info">

    Hasil pencarian untuk:

    <strong><?= htmlspecialchars($_GET['keyword']); ?></strong>

    <a href="index.php?page=kosakata" class="btn btn-sm btn-secondary float-end">

        Reset

    </a>

</div>

<?php endif; ?>

<div class="card shadow">

<div class="card-body">

<div class="table-responsive">

<table class="table table-bordered table-hover align-middle">

    <thead class="table-success">

        <tr>

            <th width="60">No</th>

            <th>Kata Jawa</th>

            <th>Arti Indonesia</th>

            <th>Kategori</th>

            <th width="180">Aksi</th>

        </tr>

    </thead>

    <tbody>

    <?php if(count($data['kosakata']) > 0): ?>

        <?php $no = 1; ?>

        <?php foreach($data['kosakata'] as $row): ?>

        <tr>

            <td><?= $no++; ?></td>

            <td>

                <strong>

                    <?= htmlspecialchars($row['kata_jawa']); ?>

                </strong>

            </td>

            <td>

                <?= htmlspecialchars($row['arti_indonesia']); ?>

            </td>

            <td>

                <span class="badge bg-success">

                    <?= htmlspecialchars($row['nama_kategori']); ?>

                </span>

            </td>

            <td>

                <a href="index.php?page=editKosakata&id=<?= $row['id']; ?>"
                   class="btn btn-warning btn-sm">

                    Edit

                </a>

                <a href="index.php?page=hapusKosakata&id=<?= $row['id']; ?>"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Yakin ingin menghapus data ini?')">

                    Hapus

                </a>

            </td>

        </tr>

        <?php endforeach; ?>

    <?php else: ?>

        <tr>

            <td colspan="5" class="text-center">

                Tidak ada data kosakata.

            </td>

        </tr>

    <?php endif; ?>

    </tbody>

</table>

</div>

</div>

</div>

<?php require_once __DIR__ . "/../layout/footer.php"; ?>
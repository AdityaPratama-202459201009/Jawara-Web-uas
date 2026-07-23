<?php require_once __DIR__ . "/../layout/header.php"; ?>
// dibuat oleh bintang
<div class="card shadow">

    <div class="card-header bg-success text-white text-center">
        <h2>🎉 Hasil Kuis</h2>
    </div>

    <div class="card-body text-center">

        <h1 class="display-1 text-success">
            <?= $data['score']; ?>
        </h1>

        <h4>Nilai Anda</h4>

        <hr>

        <h5>
            Jawaban Benar :
            <?= $data['benar']; ?>
            dari
            <?= $data['jumlah']; ?>
            soal
        </h5>

        <br>

        <?php if($data['score'] >= 80): ?>

            <div class="alert alert-success">
                🏆 Sangat Baik!
            </div>

        <?php elseif($data['score'] >= 60): ?>

            <div class="alert alert-warning">
                👍 Cukup Baik
            </div>

        <?php else: ?>

            <div class="alert alert-danger">
                📚 Terus belajar lagi ya!
            </div>

        <?php endif; ?>

        <a href="index.php?page=kuis" class="btn btn-success">
            Ulangi Kuis
        </a>

        <a href="index.php?page=home" class="btn btn-secondary">
            Dashboard
        </a>

    </div>

</div>

<?php require_once __DIR__ . "/../layout/footer.php"; ?>
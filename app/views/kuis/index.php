<?php require_once __DIR__ . "/../layout/header.php"; ?>
//dibuat oleh bintang
<div class="card shadow">

    <div class="card-header bg-success text-white">

        <h3>📝 Kuis Bahasa Jawa</h3>

        <p class="mb-0">
            Pilih arti Bahasa Indonesia yang benar.
        </p>

    </div>

    <div class="card-body">

        <form action="index.php?page=cekKuis" method="POST">

            <?php foreach ($data['soal'] as $no => $soal): ?>

                <div class="mb-5">

                    <h5>

                        <?= $no + 1; ?>.
                        Apa arti dari kata
                        <span class="text-success fw-bold">
                            <?= htmlspecialchars($soal['kata_jawa']); ?>
                        </span>
                        ?

                    </h5>

                    <?php foreach ($soal['pilihan'] as $pilihan): ?>

                        <div class="form-check mt-2">

                            <input
                                class="form-check-input"
                                type="radio"
                                name="jawaban[<?= $soal['id']; ?>]"
                                value="<?= htmlspecialchars($pilihan['arti_indonesia']); ?>"
                                required>

                            <label class="form-check-label">

                                <?= htmlspecialchars($pilihan['arti_indonesia']); ?>

                            </label>

                        </div>

                    <?php endforeach; ?>

                </div>

                <hr>

            <?php endforeach; ?>

            <button class="btn btn-success btn-lg">

                Selesai Kuis

            </button>

        </form>

    </div>

</div>

<?php require_once __DIR__ . "/../layout/footer.php"; ?>
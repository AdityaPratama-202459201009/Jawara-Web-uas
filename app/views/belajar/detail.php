<?php require_once __DIR__ . "/../layout/header.php"; ?>

<div class="card shadow">

    <div class="card-header bg-success text-white">

        <h3>

            📚 Belajar Bahasa Jawa

        </h3>

    </div>

    <div class="card-body">

        <h4>

            Kategori :
            <?= $data['kategori']['nama_kategori']; ?>

        </h4>

        <hr>

        <?php if(count($data['kosakata']) > 0): ?>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-success">

                        <tr>

                            <th width="70">No</th>

                            <th>Kata Jawa</th>

                            <th>Arti Indonesia</th>

                        </tr>

                    </thead>

                    <tbody>

                    <?php $no=1; ?>

                    <?php foreach($data['kosakata'] as $row): ?>

                        <tr>

                            <td><?= $no++; ?></td>

                            <td>

                                <strong>

                                    <?= $row['kata_jawa']; ?>

                                </strong>

                            </td>

                            <td>

                                <?= $row['arti_indonesia']; ?>

                            </td>

                        </tr>

                    <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        <?php else: ?>

            <div class="alert alert-warning">

                Belum ada kosakata pada kategori ini.

            </div>

        <?php endif; ?>

        <a href="index.php?page=belajar"

        class="btn btn-secondary">

            Kembali

        </a>

    </div>

</div>

<?php require_once __DIR__ . "/../layout/footer.php"; ?>
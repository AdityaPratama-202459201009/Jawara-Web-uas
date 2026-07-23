<?php require_once __DIR__ . "/../layout/header.php"; ?>
//dibuat oleh bintang
<div class="p-5 mb-4 bg-success text-white rounded shadow">

    <h1 class="display-5 fw-bold">
        📖 JAWARA
    </h1>

    <p class="lead">
        Website Belajar Bahasa Jawa berbasis PHP Native MVC dan SQLite.
    </p>

    <a href="index.php?page=belajar" class="btn btn-light btn-lg">
        Mulai Belajar
    </a>

</div>

<div class="row">

    <div class="col-md-6 mb-4">

        <div class="card shadow text-center">

            <div class="card-body">

                <h1>📂</h1>

                <h5>Total Kategori</h5>

                <h2 class="text-success">
                    <?= $data['totalKategori']; ?>
                </h2>

            </div>

        </div>

    </div>

    <div class="col-md-6 mb-4">

        <div class="card shadow text-center">

            <div class="card-body">

                <h1>📖</h1>

                <h5>Total Kosakata</h5>

                <h2 class="text-primary">
                    <?= $data['totalKosakata']; ?>
                </h2>

            </div>

        </div>

    </div>

</div>

<div class="row mt-4">

    <div class="col-md-3 mb-4">

        <div class="card shadow h-100">

            <div class="card-body text-center">

                <h1>📂</h1>

                <h4>Kategori</h4>

                <p>Kelola kategori Bahasa Jawa.</p>

                <a href="index.php?page=kategori" class="btn btn-success">
                    Buka
                </a>

            </div>

        </div>

    </div>

    <div class="col-md-3 mb-4">

        <div class="card shadow h-100">

            <div class="card-body text-center">

                <h1>📖</h1>

                <h4>Kosakata</h4>

                <p>Tambah, ubah, dan hapus kosakata.</p>

                <a href="index.php?page=kosakata" class="btn btn-primary">
                    Buka
                </a>

            </div>

        </div>

    </div>

    <div class="col-md-3 mb-4">

        <div class="card shadow h-100">

            <div class="card-body text-center">

                <h1>🎓</h1>

                <h4>Belajar</h4>

                <p>Pelajari kosakata berdasarkan kategori.</p>

                <a href="index.php?page=belajar" class="btn btn-warning">
                    Belajar
                </a>

            </div>

        </div>

    </div>

    <div class="col-md-3 mb-4">

        <div class="card shadow h-100">

            <div class="card-body text-center">

                <h1>📝</h1>

                <h4>Kuis</h4>

                <p>Uji kemampuan Bahasa Jawa melalui kuis.</p>

                <a href="index.php?page=kuis" class="btn btn-danger">
                    Mulai Kuis
                </a>

            </div>

        </div>

    </div>

</div>

<div class="card shadow mt-4">

    <div class="card-header bg-success text-white">

        <h4>Tentang JAWARA</h4>

    </div>

    <div class="card-body">

        <p>

            JAWARA merupakan website pembelajaran Bahasa Jawa yang dikembangkan menggunakan PHP Native, SQLite, Bootstrap 5, dan arsitektur MVC.

        </p>

        <ul>

            <li>✅ Dashboard</li>
            <li>✅ CRUD Kategori</li>
            <li>✅ CRUD Kosakata</li>
            <li>✅ Belajar Bahasa Jawa</li>
            <li>✅ Kuis Interaktif</li>
            <li>✅ Pencarian Kosakata</li>
            <li>✅ Responsive Bootstrap 5</li>

        </ul>

    </div>

</div>

<?php require_once __DIR__ . "/../layout/footer.php"; ?>
<?php

$page = $_GET['page'] ?? 'home';

switch ($page) {

    // ===========================
    // HOME
    // ===========================
    case "home":
        require_once "../app/controllers/HomeController.php";
        $controller = new HomeController();
        $controller->index();
        break;

    // ===========================
    // KATEGORI
    // ===========================
    case "kategori":
        require_once "../app/controllers/KategoriController.php";
        $controller = new KategoriController();
        $controller->index();
        break;

    case "tambahKategori":
        require_once "../app/controllers/KategoriController.php";
        $controller = new KategoriController();
        $controller->tambah();
        break;

    case "editKategori":
        require_once "../app/controllers/KategoriController.php";
        $controller = new KategoriController();
        $controller->edit();
        break;

    case "hapusKategori":
        require_once "../app/controllers/KategoriController.php";
        $controller = new KategoriController();
        $controller->hapus();
        break;

    // ===========================
    // KOSAKATA
    // ===========================
    case "kosakata":
        require_once "../app/controllers/KosakataController.php";
        $controller = new KosakataController();
        $controller->index();
        break;

    case "tambahKosakata":
        require_once "../app/controllers/KosakataController.php";
        $controller = new KosakataController();
        $controller->tambah();
        break;

    case "editKosakata":
        require_once "../app/controllers/KosakataController.php";
        $controller = new KosakataController();
        $controller->edit();
        break;

    case "hapusKosakata":
        require_once "../app/controllers/KosakataController.php";
        $controller = new KosakataController();
        $controller->hapus();
        break;

    // ===========================
    // BELAJAR
    // ===========================
    case "belajar":
        require_once "../app/controllers/BelajarController.php";
        $controller = new BelajarController();
        $controller->index();
        break;

    case "detailBelajar":
        require_once "../app/controllers/BelajarController.php";
        $controller = new BelajarController();
        $controller->detail();
        break;

    // ===========================
    // KUIS
    // ===========================
    case "kuis":
        require_once "../app/controllers/KuisController.php";
        $controller = new KuisController();
        $controller->index();
        break;

    case "cekKuis":
        require_once "../app/controllers/KuisController.php";
        $controller = new KuisController();
        $controller->cek();
        break;

    // ===========================
    // TENTANG
    // ===========================
    case "tentang":
        require_once "../app/controllers/TentangController.php";
        $controller = new TentangController();
        $controller->index();
        break;

    // ===========================
    // DEFAULT
    // ===========================
    default:
        require_once "../app/controllers/HomeController.php";
        $controller = new HomeController();
        $controller->index();
        break;
}
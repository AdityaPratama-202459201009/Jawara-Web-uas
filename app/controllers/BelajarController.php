<?php

require_once "Controller.php";
require_once "../app/models/KategoriModel.php";
require_once "../app/models/KosakataModel.php";

class BelajarController extends Controller
{
    private $kategoriModel;
    private $kosakataModel;

    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
        $this->kosakataModel = new KosakataModel();
    }

    // Menampilkan semua kategori
    public function index()
    {
        $data['kategori'] = $this->kategoriModel->getAll();

        $this->view("belajar/index", $data);
    }

    // Menampilkan kosakata berdasarkan kategori
    public function detail()
    {
        if (!isset($_GET['id'])) {
            header("Location: index.php?page=belajar");
            exit;
        }

        $id = $_GET['id'];

        $data['kategori'] = $this->kategoriModel->getById($id);
        $data['kosakata'] = $this->kosakataModel->getByKategori($id);

        $this->view("belajar/detail", $data);
    }
}
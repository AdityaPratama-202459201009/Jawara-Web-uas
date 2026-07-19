<?php

require_once __DIR__ . "/Controller.php";
require_once __DIR__ . "/../models/KategoriModel.php";

class KategoriController extends Controller
{
    private $kategoriModel;

    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
    }

    public function index()
    {
        $data = [
            "title" => "Daftar Kategori",
            "kategori" => $this->kategoriModel->getAll()
        ];

        $this->view("kategori/index", $data);
    }

    public function tambah()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nama = trim($_POST["nama_kategori"]);

            if ($nama != "") {
                $this->kategoriModel->insert($nama);
            }

            header("Location: index.php?page=kategori");
            exit;
        }

        $this->view("kategori/tambah");
    }

    public function edit()
    {
        $id = $_GET['id'];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nama = trim($_POST["nama_kategori"]);

            if ($nama != "") {
                $this->kategoriModel->update($id, $nama);
            }

            header("Location: index.php?page=kategori");
            exit;
        }

        $data = [
            "kategori" => $this->kategoriModel->getById($id)
        ];

        $this->view("kategori/edit", $data);
    }

    public function hapus()
    {
        $id = $_GET['id'];

        $this->kategoriModel->delete($id);

        header("Location: index.php?page=kategori");
        exit;
    }
}
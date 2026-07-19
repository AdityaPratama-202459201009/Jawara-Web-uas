<?php

require_once __DIR__ . "/Controller.php";
require_once __DIR__ . "/../models/KosakataModel.php";

class KosakataController extends Controller
{
    private $kosakataModel;

    public function __construct()
    {
        $this->kosakataModel = new KosakataModel();
    }

    // ==========================
    // DAFTAR KOSAKATA + SEARCH
    // ==========================
    public function index()
    {
        if (isset($_GET['keyword']) && trim($_GET['keyword']) != "") {

            $kosakata = $this->kosakataModel->search(trim($_GET['keyword']));

        } else {

            $kosakata = $this->kosakataModel->getAll();

        }

        $data = [
            "title" => "Daftar Kosakata",
            "kosakata" => $kosakata
        ];

        $this->view("kosakata/index", $data);
    }

    // ==========================
    // TAMBAH
    // ==========================
    public function tambah()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $kata = trim($_POST["kata_jawa"]);
            $arti = trim($_POST["arti_indonesia"]);
            $kategori = $_POST["kategori_id"];

            if ($kata != "" && $arti != "") {

                $this->kosakataModel->insert(
                    $kata,
                    $arti,
                    $kategori
                );

            }

            header("Location: index.php?page=kosakata");
            exit;
        }

        $data = [
            "kategori" => $this->kosakataModel->getKategori()
        ];

        $this->view("kosakata/tambah", $data);
    }

    // ==========================
    // EDIT
    // ==========================
    public function edit()
    {
        $id = $_GET["id"];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $kata = trim($_POST["kata_jawa"]);
            $arti = trim($_POST["arti_indonesia"]);
            $kategori = $_POST["kategori_id"];

            $this->kosakataModel->update(
                $id,
                $kata,
                $arti,
                $kategori
            );

            header("Location: index.php?page=kosakata");
            exit;
        }

        $data = [

            "kosakata" => $this->kosakataModel->getById($id),

            "kategori" => $this->kosakataModel->getKategori()

        ];

        $this->view("kosakata/edit", $data);
    }

    // ==========================
    // HAPUS
    // ==========================
    public function hapus()
    {
        $id = $_GET["id"];

        $this->kosakataModel->delete($id);

        header("Location: index.php?page=kosakata");
        exit;
    }
}
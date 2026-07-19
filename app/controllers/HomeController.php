<?php

require_once __DIR__ . "/Controller.php";
require_once __DIR__ . "/../models/KategoriModel.php";
require_once __DIR__ . "/../models/KosakataModel.php";

class HomeController extends Controller
{
    private $kategoriModel;
    private $kosakataModel;

    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
        $this->kosakataModel = new KosakataModel();
    }

    public function index()
    {
        $data = [

            "title" => "JAWARA",

            "welcome" => "Selamat Datang di Website Belajar Bahasa Jawa",

            "totalKategori" => $this->kategoriModel->countData(),

            "totalKosakata" => $this->kosakataModel->countData()

        ];

        $this->view("home/index", $data);
    }
}
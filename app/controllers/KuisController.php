<?php

require_once __DIR__ . "/Controller.php";
require_once __DIR__ . "/../models/KosakataModel.php";

class KuisController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new KosakataModel();
    }

    // ===========================
    // HALAMAN KUIS
    // ===========================
    public function index()
    {
        $soal = $this->model->getRandom(10);

        foreach ($soal as &$item) {

            $pilihan = $this->model->getPilihan($item['id']);

            // Tambahkan jawaban yang benar
            $pilihan[] = [
                "arti_indonesia" => $item['arti_indonesia']
            ];

            shuffle($pilihan);

            $item['pilihan'] = $pilihan;
        }

        $data = [
            "title" => "Kuis Bahasa Jawa",
            "soal" => $soal
        ];

        $this->view("kuis/index", $data);
    }

    // ===========================
    // CEK NILAI
    // ===========================
    public function cek()
    {
        $score = 0;
        $benar = 0;
        $jumlah = 0;

        if (isset($_POST['jawaban'])) {

            foreach ($_POST['jawaban'] as $id => $jawaban) {

                $jumlah++;

                $data = $this->model->getById($id);

                if ($data && $jawaban == $data['arti_indonesia']) {

                    $benar++;

                }
            }

            if ($jumlah > 0) {
                $score = round(($benar / $jumlah) * 100);
            }
        }

        $hasil = [
            "title" => "Hasil Kuis",
            "score" => $score,
            "benar" => $benar,
            "jumlah" => $jumlah
        ];

        $this->view("kuis/hasil", $hasil);
    }
}
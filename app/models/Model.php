<?php
//dibuat/oleh/miko gusti marcello
class Model
{
    protected $db;

    public function __construct()
    {
        $database = __DIR__ . "/../../database/jawara.db";

        try {
            $this->db = new PDO("sqlite:" . $database);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Koneksi database gagal: " . $e->getMessage());
        }
    }
}
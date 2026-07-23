<?php
//dibuat/miko gusti marcello
require_once __DIR__ . "/Model.php";

class KosakataModel extends Model
{
    // ===========================
    // MENAMPILKAN SEMUA KOSAKATA
    // ===========================
    public function getAll()
    {
        $query = $this->db->query("
            SELECT
                kosakata.*,
                kategori.nama_kategori
            FROM kosakata
            JOIN kategori
            ON kosakata.kategori_id = kategori.id
            ORDER BY kosakata.id ASC
        ");

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    // ===========================
    // MENAMPILKAN SEMUA KATEGORI
    // ===========================
    public function getKategori()
    {
        $query = $this->db->query("
            SELECT *
            FROM kategori
            ORDER BY nama_kategori ASC
        ");

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    // ===========================
    // TAMBAH KOSAKATA
    // ===========================
    public function insert($kata, $arti, $kategori)
    {
        $query = $this->db->prepare("
            INSERT INTO kosakata
            (kata_jawa, arti_indonesia, kategori_id)
            VALUES (?, ?, ?)
        ");

        return $query->execute([
            $kata,
            $arti,
            $kategori
        ]);
    }

    // ===========================
    // AMBIL BERDASARKAN ID
    // ===========================
    public function getById($id)
    {
        $query = $this->db->prepare("
            SELECT *
            FROM kosakata
            WHERE id = ?
        ");

        $query->execute([$id]);

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    // ===========================
    // UPDATE
    // ===========================
    public function update($id, $kata, $arti, $kategori)
    {
        $query = $this->db->prepare("
            UPDATE kosakata
            SET
                kata_jawa = ?,
                arti_indonesia = ?,
                kategori_id = ?
            WHERE id = ?
        ");

        return $query->execute([
            $kata,
            $arti,
            $kategori,
            $id
        ]);
    }

    // ===========================
    // DELETE
    // ===========================
    public function delete($id)
    {
        $query = $this->db->prepare("
            DELETE FROM kosakata
            WHERE id = ?
        ");

        return $query->execute([$id]);
    }

    // ===========================
    // BELAJAR BERDASARKAN KATEGORI
    // ===========================
    public function getByKategori($id)
    {
        $query = $this->db->prepare("
            SELECT *
            FROM kosakata
            WHERE kategori_id = ?
            ORDER BY kata_jawa ASC
        ");

        $query->execute([$id]);

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    // ===========================
    // SEARCH
    // ===========================
    public function search($keyword)
    {
        $keyword = "%" . $keyword . "%";

        $query = $this->db->prepare("
            SELECT
                kosakata.*,
                kategori.nama_kategori
            FROM kosakata
            JOIN kategori
            ON kosakata.kategori_id = kategori.id
            WHERE
                kata_jawa LIKE ?
                OR arti_indonesia LIKE ?
            ORDER BY kata_jawa ASC
        ");

        $query->execute([
            $keyword,
            $keyword
        ]);

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    // ===========================
    // TOTAL DATA
    // ===========================
    public function countData()
    {
        $query = $this->db->query("
            SELECT COUNT(*) AS total
            FROM kosakata
        ");

        $hasil = $query->fetch(PDO::FETCH_ASSOC);

        return $hasil['total'];
    }

    // ===========================
    // AMBIL SOAL ACAK
    // ===========================
    public function getRandom($limit = 10)
    {
        $query = $this->db->query("
            SELECT *
            FROM kosakata
            ORDER BY RANDOM()
            LIMIT $limit
        ");

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    // ===========================
    // PILIHAN JAWABAN SALAH
    // ===========================
    public function getPilihan($id)
    {
        $query = $this->db->prepare("
            SELECT arti_indonesia
            FROM kosakata
            WHERE id != ?
            ORDER BY RANDOM()
            LIMIT 3
        ");

        $query->execute([$id]);

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
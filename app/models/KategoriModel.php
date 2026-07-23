<?php
//miko gusti marcello
require_once "Model.php";

class KategoriModel extends Model
{
    private $table = "kategori";

    public function getAll()
    {
        $query = $this->db->query("
            SELECT *
            FROM {$this->table}
            ORDER BY id ASC
        ");

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $query = $this->db->prepare("
            SELECT *
            FROM {$this->table}
            WHERE id = ?
        ");

        $query->execute([$id]);

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($nama)
    {
        $query = $this->db->prepare("
            INSERT INTO {$this->table}(nama_kategori)
            VALUES (?)
        ");

        return $query->execute([$nama]);
    }

    public function update($id, $nama)
    {
        $query = $this->db->prepare("
            UPDATE {$this->table}
            SET nama_kategori = ?
            WHERE id = ?
        ");

        return $query->execute([$nama, $id]);
    }

    public function delete($id)
    {
        $query = $this->db->prepare("
            DELETE FROM {$this->table}
            WHERE id = ?
        ");

        return $query->execute([$id]);
    }

    public function countData()
    {
        $query = $this->db->query("
            SELECT COUNT(*) as total
            FROM {$this->table}
        ");

        return $query->fetch(PDO::FETCH_ASSOC)['total'];
    }
}
<?php

class Database
{
    private $conn;

    public function connect()
    {
        try
        {
            $this->conn = new PDO(
                "sqlite:../database/jawara.db"
            );

            $this->conn->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            return $this->conn;

        }
        catch(PDOException $e)
        {
            die(
                "Database Error : " . $e->getMessage()
            );
        }
    }
}
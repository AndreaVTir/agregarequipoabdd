<?php
// models/Equipo.php

class Equipo {
    private $conn;
    private $table_name = "equipo";

    public $id_equipo;
    public $nombre_equipo;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET nombre_equipo=:nombre_equipo";

        $stmt = $this->conn->prepare($query);

        $this->nombre_equipo = htmlspecialchars(strip_tags($this->nombre_equipo));

        $stmt->bindParam(":nombre_equipo", $this->nombre_equipo);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>
<?php
// controllers/EquipoController.php

require_once '../config.php';
require_once '../models/Equipo.php';

class EquipoController {
    private $db;
    private $equipo;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->equipo = new Equipo($this->db);
    }

    public function addEquipo($nombre_equipo) {
        $this->equipo->nombre_equipo = $nombre_equipo;
        if ($this->equipo->create()) {
            return true;
        } else {
            return false;
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre_equipo = $_POST['nombre_equipo'];

    $controller = new EquipoController();
    if ($controller->addEquipo($nombre_equipo)) {
        header("Location: ../views/equipo_added.php");
    } else {
        echo "Error al añadir el equipo.";
    }
}
?>
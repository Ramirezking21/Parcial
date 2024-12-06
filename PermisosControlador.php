<?php
require_once "Modelo/PermisosModelo.php";

class PermisosController {
    private $model;

    public function __construct($conexion) {
        $this->model = new PermisosModel($conexion);
    }

    public function index() {
        $permisos = $this->model->getAll();
        require_once "Vista/index.php";
    }

    public function create($data) {
        $this->model->create($data);
        header("Location: index.php");
    }

    public function edit($id, $data) {
        $this->model->update($id, $data);
        header("Location: index.php");
    }

    public function delete($id) {
        $this->model->delete($id);
        header("Location: index.php");
    }
}
?>

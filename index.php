<?php
require_once "config.php";
require_once "Controlador/PermisosControlador.php";

$controller = new PermisosController($conn);

$action = $_GET['action'] ?? 'index';

if ($action === 'index') {
    $controller->index();
} elseif ($action === 'create') {
    require_once "Vista/create.php";
} elseif ($action === 'store') {
    $controller->create($_POST);
} elseif ($action === 'edit') {
    $permiso = $controller->model->getById($_GET['id']);
    require_once "Vista/edit.php";
} elseif ($action === 'update') {
    $controller->edit($_GET['id'], $_POST);
} elseif ($action === 'delete') {
    $controller->delete($_GET['id']);
}
?>

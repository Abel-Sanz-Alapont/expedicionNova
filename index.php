<?php
require_once "autoload.php";
session_start();




$gestor = new gestorNave();

$controller = new Controller($gestor);

$accion = $_GET['accion'] ?? 'index';

switch ($accion) {

    case 'crear':
        $controller->crear();
        break;

    case 'editarEntidad':
        $controller->editarEntidad();
        break;

    case 'editarMineral':
        $controller->editarMineral();
        break;

    case 'editarAntiguedad':
        $controller->editarAntiguedad();
        break;

    case 'eliminar':
        $controller->eliminar();
        break;

    default:
        $controller->index();
}

<?php
require_once "env.php";
require_once "template.php";

$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'landing';
$params = explode('/',$url);

$controller =$params[0] ?? 'landing';
$action =$params[1] ?? null;

switch ($controller) {
    case 'landing':
        require_once "controllers/LandingController.php";
        break;
    case 'panel':
        require_once "controllers/PanelController.php";
        break;
    case 'detalle':
        $chipid =$action;
        require_once "controllers/DetalleController.php";
        break;
    default:
        require_once "controllers/LandingController.php";
        break;
}

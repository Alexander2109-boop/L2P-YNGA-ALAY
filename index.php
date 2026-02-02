<?php
require_once 'controlador/UsuarioControlador.php';
$accion = $_GET['accion'] ?? 'inicio';
$usuarioCtrl = new UsuarioControlador();
switch ($accion) {
    case 'login':
        // aqui se captura el error
       $error = isset($_GET['error']) ? "Usuario o contraseña incorrectos" : "";
        include 'vista/login.php';
        break;
    case 'procesarLogin':
        if($_SERVER ['REQUEST_METHOD'] == 'POST'){
           $usuarioCtrl->procesarLogin($_POST['usuario'], $_POST['clave']);
        }
    break;

    case 'logout':
        session_start();
        session_destroy();
        header("Location: index.php?accion=inicio");
    break;

     case 'inicio':
        default:
        include 'vista/inicio.php';
    break;

}


?>
<?php 
session_start();
require ("logica/Admin.php");
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cuchitril</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v6.7.2/css/all.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" ></script>
    </head>

<?php 
$paginas_sin_autenticacion = array(
    "Presentacion/inicio.php",
    "Presentacion/iniciarSesion.php",
    "Presentacion/noAutorizado.php",
);

$paginas_con_autenticacion = array(
    "Presentacion/sesionAdmin.php",
    "Presentacion/sesionPropietario.php"
);


if(!isset($_GET["pid"])){
    include ("Presentacion/inicio.php");
}else{

    $pid = base64_decode($_GET["pid"]);
    if(in_array($pid, $paginas_sin_autenticacion)){
        include $pid;
    }else if(in_array($pid, $paginas_con_autenticacion)){
        if(!isset($_SESSION["id"])){
            include "Presentacion/inicioSesion.php";
        }else{
            include $pid;
        }
    }else{
        echo "error 404";
    }
}
?>
</html>
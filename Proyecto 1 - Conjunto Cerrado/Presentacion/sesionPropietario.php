<?php
if($_SESSION["rol"] != "propietario"){
    header("Location: ?pid=" . base64_encode("Presentacion/noAutorizado.php"));
}
?>
<body>
<?php 
include ("Presentacion/encabezado.php");
include ("Presentacion/menuPropietario.php");
?>


</body>
<?php
if($_SESSION["rol"] != "admin"){
    header("Location: ?pid=" . base64_encode("Presentacion/noAutorizado.php"));
}
?>
<body>
<?php 
include ("Presentacion/encabezado.php");
include ("Presentacion/menuAdmin.php");
?>


</body>
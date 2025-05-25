<?php 
$id = $_SESSION["id"];
$admin = new Admin($id);
$admin -> consultar();
?>
<p>Hola Administrador: <?php echo $admin -> getNombre() . " " . $admin -> getApellido() ?></p>
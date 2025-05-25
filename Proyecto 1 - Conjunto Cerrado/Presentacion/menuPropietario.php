<?php

require_once __DIR__ . '/../Persistencia/Conexion.php';
require_once __DIR__ . '/../Logica/Persona.php';
require_once __DIR__ . '/../Logica/Propietario.php';
require_once __DIR__ . '/../Persistencia/PropietarioDAO.php';

// Ahora ya puedes usar la clase
$id = $_SESSION["id"];
$propietario = new Propietario($id);
$propietario->consultar();
?>
<p>Hola Propietario: <?= $propietario->getNombre() . ' ' . $propietario->getApellido() ?></p>

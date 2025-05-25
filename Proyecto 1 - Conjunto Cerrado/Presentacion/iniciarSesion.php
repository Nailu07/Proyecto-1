<?php 
require_once __DIR__ . '/../Persistencia/Conexion.php';
require_once __DIR__ . '/../Logica/Persona.php';
require_once __DIR__ . '/../Logica/Admin.php';
require_once __DIR__ . '/../Persistencia/AdminDAO.php';
require_once __DIR__ . '/../Logica/Propietario.php';
require_once __DIR__ . '/../Persistencia/PropietarioDAO.php';

if(isset($_GET["sesion"])){
    if($_GET["sesion"] == "false"){
        session_destroy();
    }
}
$error=false;
if(isset($_POST["autenticar"])){
    $correo = $_POST["correo"];
    $clave = $_POST["clave"];
    $admin = new Admin("", "", "", $correo, $clave, $telefono, $fNacimiento);
    if($admin -> autenticar()){
        $_SESSION["id"] = $admin -> getId();
        $_SESSION["rol"] = "admin";
        header("Location: ?pid=" . base64_encode("Presentacion/sesionAdmin.php"));
    }else{
        $propietario = new Propietario("", "", "", $correo, $clave, "", "", "");
        if($propietario -> autenticar()){
            $_SESSION["id"] = $propietario -> getId();
            $_SESSION["rol"] = "propietario";
            header("Location: ?pid=" . base64_encode("Presentacion/sesionPropietario.php"));
    }else{
        $error=true;
    }
}
}
?>
<body>
    <?php include ("Presentacion/encabezado.php");?>
    <div class="container my-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4>Iniciar Sesion</h4>
                    </div>
                    <div class="card-body">
                        <form action="?pid=<?php echo base64_encode("Presentacion/iniciarSesion.php") ?>" method="post">
                            <div class="mb-3">								
                                <input type="email" class="form-control" name="correo" placeholder="Correo">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" name="clave" placeholder="Clave">
                            </div>							
                            <button type="submit" class="btn btn-primary" name="autenticar">Autenticar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


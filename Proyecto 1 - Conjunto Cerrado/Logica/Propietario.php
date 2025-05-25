<?php
require_once("Persistencia/Conexion.php");
require_once("Logica/Persona.php");
require_once("Persistencia/PropietarioDAO.php");

class Propietario extends Persona {
    private $fAdquisicion;

    public function __construct($id = "", $nombre = "", $apellido = "", $correo = "", $clave = "", $telefono="", $fNacimiento="", $fAdquisicion=""){
        parent::__construct($id, $nombre, $apellido, $correo, $clave, $telefono, $fNacimiento);
        $this -> fAdquisicion = $fAdquisicion;
    }
    
    public function autenticar(){
        $conexion = new Conexion();
        $propietarioDAO = new PropietarioDAO("","","", $this -> correo, $this -> clave, "", "","");
        $conexion -> abrir();
        $conexion -> ejecutar($propietarioDAO -> autenticar());
        if($conexion -> filas() == 1){            
            $this -> id = $conexion -> registro()[0];
            $conexion->cerrar();
            return true;
        }else{
            $conexion->cerrar();
            return false;
        }
    }

    public function consultar(){
        $conexion = new Conexion();
        $propietarioDAO = new PropietarioDAO($this -> id);
        $conexion -> abrir();
        $conexion -> ejecutar($propietarioDAO -> consultar());
        $datos = $conexion -> registro();
        $this -> nombre = $datos[0];
        $this -> apellido = $datos[1];
        $this -> correo = $datos[2];
        $conexion->cerrar();
    }
}

<?php

class PropietarioDAO{
    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $clave;
    protected $telefono;
    protected $fNacimiento;
    private $fAdquisicion;

    public function __construct($id = 0, $nombre = "", $apellido = "", $correo = "", $clave = "", $telefono="", $fNacimiento="", $fAdquisicion=""){
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> correo = $correo;
        $this -> clave = $clave;
        $this -> telefono = $telefono;
        $this -> fNacimiento = $fNacimiento;
        $this -> fAdquisicion = $fAdquisicion;
    }

    public function autenticar(){
        return "select idPropietario
                from propietario 
                where correo = '" . $this -> correo . "' and clave = '" . md5($this -> clave) . "'";
    }
    
    public function consultar(){
        return "select nombre, apellido, correo
                from propietario
                where idPropietario = '" . $this -> id . "'";
    }
}

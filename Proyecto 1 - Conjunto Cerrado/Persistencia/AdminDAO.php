<?php

class AdminDAO{
    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $clave;
    protected $telefono;
    protected $fNacimiento;

    public function __construct($id = 0, $nombre = "", $apellido = "", $correo = "", $clave = "", $telefono="", $fNacimiento=""){
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> correo = $correo;
        $this -> clave = $clave;
        $this -> telefono = $telefono;
        $this -> fNacimiento = $fNacimiento;
    }

    public function autenticar(){
        return "select idAdministrador
                from Administrador 
                where correo = '" . $this -> correo . "' and clave = '" . md5($this -> clave) . "'";
    }
    
    public function consultar(){
        return "select nombre, apellido, correo
                from Administrador
                where idAdministrador = '" . $this -> id . "'";
    }
}

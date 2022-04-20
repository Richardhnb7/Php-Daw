<?php
class Persona {
    private $nombre;
    private $apellido;
    private $dni;
    function __construct($dni, $nombre, $apellido){
        $this->dni=$dni;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
    }


    function getNombre(){
        return $nombre;
    }
    function getApellido(){
        return $apellido;
    }
    function getDNi(){
        return $dni;
    }

    function setNombre($nombre){
        $this->nombre=$nombre;
    }
    function setApellido($apellido){
        $this->apellido=$apellido;
    }
    function setDNI($dni){
        $this->dni=$dni;
    }

    function __toString(){
        return "Persona: ".$this->nombre." ". $this->apellido."DNI: ".$this->dni;
    }
}


?>
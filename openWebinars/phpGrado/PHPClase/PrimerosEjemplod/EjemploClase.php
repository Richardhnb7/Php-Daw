<?php
class Persona {//contructor de la clase persona y sus propiedades 
    private $DNI;
    private $nombre;
    private $apellido;

    function __construct($DNI, $nombre,$apellido){
        $this->DNI=$DNI;
        $this->nombre=$nombre;
        $this->apellido=$apellido;

    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getDNI(){
        return $this->DNI;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function setNombre($nombre){
        $this-> nombre= $nombre;
    }
    public function setDNI($DNI){
        $this->DNI=$DNI;
    }
    public function setApellido($apellido){
        $this->apellido=$apellido;
    }
    public function __toString(){
        return "Persona: ". " ". $this->DNI." ".$this->nombre." ". $this->apellido;
    }
}


class Cliente extends Persona{//clase con herencia de persona
    private $saldo=0;
    function __construct($DNI,$nombre,$apellido,$saldo){//aqui le añadimos la nueva variable
        parent::__construct($DNI,$nombre,$apellido);
        $this->saldo=$saldo;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($saldo){
        $this->saldo=$saldo;
    }
    public function __toString(){
        return "Cliente: ". $this->getNombre();
    }
}

$per= new Persona("11111A", "Ana", "Puertas");
echo $per. "<br>";
$per->setApellido("Montes");//cambiar el valor de la variable apellido 
echo $per."<br>";

$cli=new Cliente ("222A", "Pedro", "Sales",100);//aui declaramos un objeto de la clase persona y lo mostramos
echo $cli. "<br>";
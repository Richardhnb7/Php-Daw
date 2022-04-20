<?php
class restaurante{
    private $correo;
    private $clave;
    private $pais;
    private $cp;
    private $ciudad;
    private $direccion;
    private $rol;

    function __construct($correo, $clave, $pais, $cp, $ciudad, $direccion, $rol){
        $this ->correo=$correo;
        $this->clave=$clave;
        $this->pais=$pais;
        $this->cp=$cp;
        $this ->ciudad=$ciudad;
        $this->direccion=$direccion;
        $this->rol=$rol;
    }

    public function getcorreo(){
        return $this->correo;
    }
    public function getclave(){
        return $this->clave;
    }
    public function getpais(){
        return $this->pais;
    }
    public function getcp(){
        return $this->cp;
    }
    public function getciudad(){
        return $this->ciudad;
    }
    public function getdireccion(){
        return $this->direccion;
    }
    public function getrol(){
        return $this->rol;
    }
    public function setcorreo($correo){
         $this->correo=$correo;
    }
    public function setclave($clave){
        $this->clave=$clave;
    }
    public function setpais($pais){
    $this->pais=$pais;
    }
    public function setcp($cp){
        $this->cp=$cp;
    }
    public function setciudad($ciudad){
        $this->ciudad=$ciudad;
    }
    public function setdireccion($direccion){
        $this->direccion=$direccion;
    }
    public function setrol($rol){
        $this->rol=$rol;
    }
    public function __toString(){
        return "Restaurante: ".$this->correo." ".$this->clave." ". $this->pais. " ". $this->cp." ".
        $this->ciudad." ".$this->direccion." ".$this->rol;

    }
}

class producto{
    private $nombre;
    private $descripcion;
    private $peso;
    private $stock;
    private $categoria;

    function __construct($nombre, $descripcion, $peso, $stock, $categoria){
        $this ->nombre=$nombre;
        $this->descripcion=$descripcion;
        $this->peso=$peso;
        $this->stock=$stock;
        $this ->categoria=$categoria;
    }

    public function getnombre(){
        return $this->nombre;
    }
    public function getdescripcion(){
        return $this->descripcion;
    }
    public function getpeso(){
        return $this->peso;
    }
    public function getstock(){
        return $this->stock;
    }
    public function getcategoria(){
        return $this->categoria;
    }
    
    public function setnombre($nombre){
         $this->nombre=$nombre;
    }
    public function setdescripcion($descripcion){
        $this->descripcion=$descripcion;
    }
    public function setpeso($peso){
    $this->peso=$peso;
    }
    public function setstock($stock){
        $this->stock=$stock;
    }
    public function setcategoria($categoria){
        $this->categoria=$categoria;
    }
    
    public function __toString(){
        return "Restaurante: ".$this->nombre." ".$this->descripcion." ". $this->peso. " ". $this->stock." ".
        $this->categoria;

    }
}


class NuevoProducto{
    private $id;
    private $stock;
    private $categoria;

    function __construct($id, $stock, $categoria){
        $this ->id=$id;
        $this->stock=$stock;
        $this->categoria=$categoria;
    }

    public function getid(){
        return $this->id;
    }
    public function getstock(){
        return $this->stock;
    }
    public function getcategoria(){
        return $this->categoria;
    }

    public function setid($id){
        $this->id=$id;
        }
    public function setstock($stock){
        $this->stock=$stock;
    }
    public function setcategoria($categoria){
        $this->categoria=$categoria;
    }
}
?>
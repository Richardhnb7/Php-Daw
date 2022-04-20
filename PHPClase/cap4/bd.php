<?php
function leer_config($nombre, $esquema){
	$config = new DOMDocument();
	$config->load($nombre);
	$res = $config->schemaValidate($esquema);
	if ($res===FALSE){ 
		throw new InvalidArgumentException("Revise fichero de configuración");
	} 		
	$datos = simplexml_load_file($nombre);	
	$ip = $datos->xpath("//ip");
	$nombre = $datos->xpath("//nombre");
	$usu = $datos->xpath("//usuario");
	$clave = $datos->xpath("//clave");	
	$cad = sprintf("mysql:dbname=%s;host=%s", $nombre[0], $ip[0]);
	$resul = [];
	$resul[] = $cad;
	$resul[] = $usu[0];
	$resul[] = $clave[0];
	return $resul;
}
function comprobar_usuario($nombre, $clave,$bd){
	// $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	// $bd = new PDO($res[0], $res[1], $res[2], $res[3]);
	$ins = "select codRes, correo from restaurantes where correo = '$nombre' and clave = '$clave'";
	$resul = $bd->query($ins);	
	if($resul->rowCount() === 1){		
		return $resul->fetch();	//te devuelve un array con los resultados
	}else{
		return FALSE;
	}
}
function cargar_categorias($bd){
	// $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	// $bd = new PDO($res[0], $res[1], $res[2]);
	$ins = "select codCat, nombre from categorias";
	$resul = $bd->query($ins);	
	if (!$resul) {
		return FALSE;
	}
	if ($resul->rowCount() === 0) {    
		return FALSE;
    }
	//si hay 1 o más
	return $resul;	
}
function cargar_categoria($codCat,$bd){
	// $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	// $bd = new PDO($res[0], $res[1], $res[2]);
	$ins = "select nombre, descripcion from categorias where codcat = $codCat";
	$resul = $bd->query($ins);	
	if (!$resul) {
		return FALSE;
	}
	if ($resul->rowCount() === 0) {    
		return FALSE;
    }	
	//si hay 1 o más
	return $resul->fetch();	
}
function cargar_productos_categoria($codCat,$bd){
	// $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	// $bd = new PDO($res[0], $res[1], $res[2]);	
	$sql = "select * from productos where categoria  = $codCat";	
	$resul = $bd->query($sql);	
	if (!$resul) {
		return FALSE;
	}
	if ($resul->rowCount() === 0) {    
		return FALSE;
    }	
	//si hay 1 o más
	return $resul;			
}

function cargar_productos($codigosProductos,$bd){
	// $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	// $bd = new PDO($res[0], $res[1], $res[2]);
	$texto_in = implode(",", $codigosProductos);
	$ins = "select * from productos where codProd in($texto_in)";
	$resul = $bd->query($ins);	
	if (!$resul) {
		return FALSE;
	}
	return $resul;	
}
function insertar_pedido($carrito, $codRes, $bd){
	// $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	// $bd = new PDO($res[0], $res[1], $res[2]);
	$bd->beginTransaction();	
	$hora = date("Y-m-d H:i:s", time());

	$sql = "insert into pedidos(fecha, enviado, restaurante) values('$hora',0, $codRes)";
	$resul = $bd->query($sql);	
	if (!$resul) {
		return FALSE;
	}
	
	$pedido = $bd->lastInsertId();

	foreach($carrito as $codProd=>$unidades){
		$sql = "insert into pedidosproductos(Pedido, Producto, Unidades) values( $pedido, $codProd, $unidades)";			
		$resul = $bd->query($sql);	
		if (!$resul) {
			$bd->rollback();
			return FALSE;
		}
	}
	$bd->commit();
	return $pedido;
}
function abrir_bbdd(){
	$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]);
	return $bd;
}
function insertar_restaurante($valor,$bd){
	$bd->beginTransaction();
	$preparada=$bd->prepare("insert into restaurantes(correo, clave, pais, cp, ciudad, direccion, rol) values(?, ?, ?, ?, ?, ?, ?)");
	
		$correo=$valor->getcorreo();
		$clave=$valor->getclave();
		$pais=$valor->getpais();
		$cp=$valor->getcp();
		$ciudad=$valor->getciudad();
		$direccion=$valor->getdireccion();
		$rol=$valor->getrol();

		echo "estoy antes del execute <br>";
		$preparada->execute(array($correo,$clave,$pais,$cp,$ciudad,$direccion,$rol));
	
		if($preparada) {
			echo "insert correcto <br>";
			echo "Filas insertadas: " . $preparada->rowCount() . "<br>";
			
		}else {
			echo "Estoy dentro del error<br>";
			print_r( $bd -> errorinfo());
			$bd->rollback();
		}	
	$bd->commit();
}

function insertar_productos($producto,$bd){
	
	echo "estoy dentro <br>";
	$nombre=$producto->getnombre();
	$descripcion=$producto->getdescripcion();
	$peso=$producto->getpeso();
	$stock=$producto->getstock();
	$categoria=$producto->getcategoria();

	$sel= "select codCat from categorias where codcat=$categoria";
	
	$result = $bd->query($sel);
	
	if($result) {
		echo "la categoria es correcta, vamos a proceder a la insercion <br>";
		$result1=$bd->prepare("insert into productos (nombre,descripcion,peso,stock,categoria)values (?,?,?,?,?)");

		$result1->execute(array($nombre,$descripcion,$peso,$stock,$categoria));
	}	

}




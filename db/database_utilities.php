<?php
require_once('database_credentials.php');
$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$result = '';

if( $mysqli->connect_errno )
{
	echo 'Error en la conexión';
	exit;
}

function run_query($tab)
{
	global $mysqli, $result;
	$sql = "SELECT * FROM {$tab}";
	return $mysqli->query($sql);

}

function entrar($email, $pass)
{
	global $mysqli;
	$sql="SELECT * FROM `clientes` WHERE `correo` LIKE '{$email}' AND `contrasena` LIKE '{$pass}'";
	$result = $mysqli->query($sql);
	
	if( $result->num_rows ){

		if(!isset($_SESSION['USER'])){

			$user=$result->fetch_assoc();

			$_SESSION['USER'][0]=$user;
			echo "<script>alert('Ingreso exitoso. Bienvenido de nuevo!');</script>";
	
		} else {
			$user=$result->fetch_assoc();
			$_SESSION['USER'][0]=$user;
			echo "<script>alert('Ingreso exitoso. Bienvenido de nuevo!');</script>";
		}
		
	} else {
		echo "<script>alert('Usuario o contraseña incorrectos');</script>";
		return false;
	}

}

function addP( $nombre, $precio, $description, $stock, $photo )
{
	global $mysqli;
	$sql = "INSERT INTO productos (id_producto, nombre, precio, descripcion, stock, photo) VALUES (null, '{$nombre}','{$precio}', '{$description}','{$stock}','{$photo}')";
	$mysqli->query($sql);

}

function addC( $nombre, $correo, $contrasena, $direccion )
{
	global $mysqli;
	$sql = "INSERT INTO clientes (id_cliente, nombre, correo, contrasena, direccion) VALUES (null, '{$nombre}','{$correo}', '{$contrasena}','{$direccion}')";
	$mysqli->query($sql);

}

function updateP( $id, $nombre, $precio, $description, $stock, $photo )
{
	global $mysqli;
	$sql = "UPDATE productos SET nombre = '{$nombre}', precio = '{$precio}', descripcion = '{$description}', stock = '{$stock}', photo = '{$photo}' WHERE `productos`.`id_producto` = {$id}";
	$mysqli->query( $sql );
}

function updateC( $id, $nombre, $correo, $contrasena, $direccion )
{
	global $mysqli;
	$sql = "UPDATE clientes SET nombre = '{$nombre}', correo = '{$correo}', contrasena = '{$contrasena}', direccion = '{$direccion}' WHERE `clientes`.`id_cliente` = {$id}";
	$mysqli->query( $sql );
}

function delete( $id, $db )
{
	global $mysqli;

	switch ($db){
		case "productos":	$sql = "DELETE FROM productos WHERE id_producto = {$id}";
		break;
		case "clientes":	$sql = "DELETE FROM clientes WHERE id_cliente = {$id}";
		break;
		case "ventas":		$sql = "DELETE FROM ventas WHERE id_venta = {$id}";
		break;
	}

	$mysqli->query($sql);
}

function get_product_by_id( $id )
{
	global $mysqli;
	echo "id: $id";
	$sql = "SELECT * FROM `productos` WHERE `id_producto` = {$id}";
	$result = $mysqli->query($sql);
	if( $result->num_rows )
		return $result->fetch_assoc();
	return false;
}

function get_client_by_id( $id )
{
	global $mysqli;
	echo "id: $id";
	$sql = "SELECT * FROM `clientes` WHERE `id_cliente` = {$id}";
	$result = $mysqli->query($sql);
	if( $result->num_rows )
		return $result->fetch_assoc();
	return false;
}

function comprar(){
	$user=$_SESSION['USUARIO'][0];
	foreach($_SESSION['CARRITO'] as $indice=>$producto){
		global $mysqli;
		$total_f=$producto['PRECIO']*$producto['CANTIDAD'];
		$sql = "INSERT INTO `ventas`(`id_cliente`, `id_producto`, `cantidad`, `total_neto`, `total_final`, `fecha_vent`, `id_venta`) 
		VALUES ('{$user['id_cliente']}','{$producto['ID']}', '{$producto['CANTIDAD']}', '{$producto['PRECIO']}', '{$total_f}', NOW(), null )";
		$mysqli->query($sql);
	}
	echo "<script>alert('Compra realizada con éxito');</script>";
	unset($_SESSION['CARRITO']);
}
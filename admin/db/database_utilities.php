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

function addP( $nombre, $precio, $description, $stock )
{
	global $mysqli;
	$sql = "INSERT INTO productos (id_producto, nombre, precio, descripcion, stock) VALUES (null, '{$nombre}','{$precio}', '{$description}','{$stock}')";
	$mysqli->query($sql);

}

function updateP( $id, $nombre, $precio, $description, $stock )
{
	global $mysqli;
	$sql = "UPDATE productos SET nombre = '{$nombre}', precio = '{$precio}', descripcion = '{$description}', stock = '{$stock}' WHERE `productos`.`id_producto` = {$id}";
	$mysqli->query( $sql );

}

function deleteP( $id )
{
	global $mysqli;
	$sql = "DELETE FROM productos WHERE id_producto = {$id}";
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
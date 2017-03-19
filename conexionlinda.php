<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 13/03/17
 * Time: 05:55 PM
 */


//1) Se define parámetros de conexión
define('datos_conexion', [

	'servidor'  => 'localhost',
	'user'      => 'ed',
	'password'  => 'ed',
	'baseDatos' => 'tienda',
]);

//2) Se hace la conexión
$mysqli = new mysqli(datos_conexion['servidor'], datos_conexion['user'], datos_conexion['password'], datos_conexion['baseDatos']);

if ($mysqli->connect_errno) {
	die("Error al conectar con la base de datos {$mysqli->connect_error}");
} else {
	printf("Se ha conectado perfectamente\n");
}

//3) Se realizar la query
$query = "SELECT * FROM productos WHERE talla=?";

//4) Se construye la sentencia preparada
$stmt = $mysqli->prepare($query);
$_talla = 'XS';

//5) Se vincular PARÁMETROS
$stmt->bind_param('s', $_talla);

//6) Se ejecuta
$stmt->execute();

//7) Se vincular los RESULTADOS
$stmt->bind_result($id, $nombre, $talla, $precio);

//8) Se obtienen los resultados
while ($sentencia = $stmt->fetch()) {
	printf("%d\t%s\t%s\t%d\n", $id, $nombre, $talla, $precio);
}


//9) Se procesan los resultados

//10) Se cierra la sentencia preparada
$stmt->close();

//11) Se cierra la conexión
$mysqli->close();


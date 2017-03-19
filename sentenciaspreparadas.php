<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 11/03/17
 * Time: 05:56 PM
 */
define("datos_conexion", [
	"servidor"    => "localhost",
	"usuario"     => "ed",
	"password"    => "ed",
	"basededatos" => "tienda",
]);

/*1) Conectar*/

$mysqli = new mysqli(datos_conexion["servidor"], datos_conexion["usuario"], datos_conexion["password"], datos_conexion["basededatos"]);


/*2) Verificar la conexion*/
if ($mysqli->connect_errno) {
	die("Error al conectar {$mysqli->connect_error}");

} else {
	printf("Todo bien\n");
}

/*3) Prepación */
$query = "INSERT INTO productos(nombre,talla,precio) VALUES(?,?,?)";
$sentencia = $mysqli->prepare($query);
if (!$sentencia) {
	printf("Falló la preparación %d %s:\n", $mysqli->errno, $mysqli->error);
	exit();
} else {
	printf("Preparación correcta");
}

/*4) Vinculación de parámetros*/
$nombre = 'Camiseta Cobol';
$talla = 'XS';
$precio = 400;

if (!$sentencia->bind_param('ssi', $nombre, $talla, $precio)) {
	printf("Falló la vinculación %d %s:\n", $mysqli->errno, $mysqli->error);
}
/*5) Ejecución de parámetros*/

if (!$sentencia->execute()) {
	printf("Falló la ejecución %d %s:\n", $mysqli->errno, $mysqli->error);
} else {
	printf("Fila insertada %d \n", $sentencia->affected_rows);
}

/*Cerrar la sentencia*/
$sentencia->close();

/*Cerrar la conexión*/
$mysqli->close();



<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 11/03/17
 * Time: 05:14 PM
 */

/*1) Conectar*/
$mysqli = new mysqli('localhost', 'ed', 'ed', 'tienda');

/*2) Verificar la conexion*/
if ($mysqli->connect_errno) {
	echo 'Error al conectar' . $mysqli->connect_error . PHP_EOL;
}

/*3) Ejecutar sentencia de SQL*/

$resultado = $mysqli->query("SELECT nombre, precio,talla FROM productos");

/*4) Liberar la memoria de los resultados*/

while ($fila = $resultado->fetch_assoc()) {
	echo $fila['nombre'] . ' de talla ' . $fila['talla'] . ' cuesta ' . $fila['precio'] . PHP_EOL;
}

/*5) Cerra la conexión */

$resultado->free();


/*Cerra la conexión*/

$mysqli->close();
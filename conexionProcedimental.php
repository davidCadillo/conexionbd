<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 11/03/17
 * Time: 04:29 PM
 */

/*1) Conectar*/

$mysqli = mysqli_connect('localhost', 'ed', 'ed', 'tienda');

/*2) Verificar la conexion*/

if (mysqli_connect_errno($mysqli)) {
	echo 'Falló al conectar a MYSQL' . mysqli_connect_error();
} else {
	echo 'Todo bien';
}

/*3) Ejecutar sentencia de SQL*/
$resultado = mysqli_query($mysqli, "SELECT nombre,talla,precio FROM productos");

while ($fila = mysqli_fetch_assoc($resultado)) {

	echo $fila['nombre'] . ' de talla ' . $fila['talla'] . ' cuesta ' . $fila['precio'] . PHP_EOL;
}

/*4) Liberar la memoria de los resultados*/
mysqli_free_result($resultado);

/*5) Cerra la conexión */
mysqli_close($mysqli);

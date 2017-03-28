<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 19/03/17
 * Time: 09:38 PM
 */

try {

	$pdo = new PDO('mysql:host=127.0.0.1;dbname=tienda', 'ed', 'ed');
	$query = "INSERT INTO productos VALUES(NULL,:nombre,:talla,:precio)";
	//Preparar
	$sentencia = $pdo->prepare($sql);
	//Vincular
	$sentencia->bindParam(':nombre', $nombre);
	$sentencia->bindParam(':talla', $talla);
	$sentencia->bindParam(':precio', $precio);

	//Ejecutar
	$nombre = "Camiseta C++";
	$talla = "S";
	$precio = 4000;

	$sentencia->execute();

	foreach ($resultado as $fila) {
		echo "{$fila['nombre']} de talla {$fila['talla']} cuesta {$fila['precio']} \n";
	}
} catch (PDOException $e) {
	echo "Error!" . $e->getMessage() . PHP_EOL;

} finally {
	$pdo = NULL;
}
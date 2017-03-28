<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 19/03/17
 * Time: 08:34 PM
 */

try {

	$pdo = new PDO('mysql:host=127.0.0.1;dbname=tienda', 'ed', 'ed');
	$sql = "SELECT nombre, talla, precio FROM productos";
	$resultado = $pdo->query($sql);

	foreach ($resultado as $fila) {
		echo "{$fila['nombre']} de talla {$fila['talla']} cuesta {$fila['precio']} \n";
	}
} catch (PDOException $e) {
	echo "Error!" . $e->getMessage() . PHP_EOL;

} finally {
	$pdo = NULL;
}
<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 19/03/17
 * Time: 12:44 PM
 */

require_once 'ConexionPrenda.php';
require_once 'funciones.php';

if (isset($_POST)) {

	$nombre = $_POST['nombrePrenda'] ?? 'No se ha introducido el nombre de la prenda';
	$tallaNumero = $_POST['talla'] ?? 'No se ha escogido la talla';
	$talla = convertirTalla($tallaNumero);
	$precio = $_POST['precio'] ?? 'No se introducido el precio';
	$prenda = new Prenda($nombre, $talla, $precio);
	$conexion = new ConexionPrenda();
	$conexion->insert($prenda);


} else {
	echo 'No se han enviado datos';
}
<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 19/03/17
 * Time: 04:55 PM
 */
declare(strict_types = 1);

function convertirTalla(string $tallaNumero): string {

	$talla = '';
	switch ($tallaNumero) {

		case '1':
			$talla = "XS";
			break;
		case '2':
			$talla = "S";
			break;
		case '3':
			$talla = "M";
			break;
		case '4':
			$talla = "L";
			break;
		case '5':
			$talla = "XL";
			break;
		case '6':
			$talla = "XXL";
			break;
		default:
			$talla = "no especificado";
	}
	return $talla;
}
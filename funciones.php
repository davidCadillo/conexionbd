<?php
declare(strict_types = 1);

function convertirTalla(string $tallaNumero): string {

	switch ($tallaNumero) {
		case '1':
			return "XS";
		case '2':
			return "S";
		case '3':
			return "M";
		case '4':
			return "L";
		case '5':
			return "XL";
		case '6':
			return "XXL";
		default:
			return "No especificado";
	}

}
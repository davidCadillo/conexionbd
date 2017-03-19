<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 19/03/17
 * Time: 01:15 PM
 */
declare(strict_types = 1);

require_once 'Prenda.php';
require_once 'parametrosConexion.php';

class ConexionPrenda {


	private $conexion;

	/**
	 * ConexionPrenda constructor.
	 */
	public function __construct() {
		$this->conexion = new mysqli(datos_conexion['servidor'], datos_conexion['user'], datos_conexion['password'], datos_conexion['baseDatos']);
		if ($this->conexion->connect_errno) {
			die("Hubo un error al conectar la base de datos {$this->conexion->connect_error}");
		}

	}


	public function insert(Prenda $prenda) {

		$query = "INSERT INTO productos VALUES(NULL,?,?,?)";
		$nombre = $prenda->getNombre();
		$talla = $prenda->getTalla();
		$precio = $prenda->getPrecio();
		$statement = $this->conexion->prepare($query);
		if (!$statement) {
			die("Falló la preparación: ({$this->conexion->errno}) {$this->conexion->error}");

		}
		if (!$statement->bind_param('ssi', $nombre, $talla, $precio)) {
			die("Falló la viculación: ({$this->conexion->errno}) {$this->conexion->error}");

		}

		if (!$statement->execute()) {
			die("Falló la ejecución: ({$this->conexion->errno}) {$this->conexion->error}");
			exit();

		} else {
			echo "Fila insertada. {$statement->affected_rows}";
		}

		$statement->close();
		$this->conexion->close();
	}

}


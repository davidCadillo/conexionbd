<?php

/**
 * Created by PhpStorm.
 * User: david
 * Date: 19/03/17
 * Time: 01:47 PM
 */

declare(strict_types = 1);

class Prenda {

	private $nombre;
	private $talla;
	private $precio;

	/**
	 * Prenda constructor.
	 *
	 * @param $nombre
	 * @param $talla
	 * @param $precio
	 */
	public function __construct($nombre, $talla, $precio) {
		$this->nombre = $nombre;
		$this->talla = $talla;
		$this->precio = $precio;
	}

	/**
	 * @return mixed
	 */
	public function getNombre() {
		return $this->nombre;
	}

	/**
	 * @param mixed $nombre
	 */
	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	/**
	 * @return mixed
	 */
	public function getTalla() {
		return $this->talla;
	}

	/**
	 * @param mixed $talla
	 */
	public function setTalla($talla) {
		$this->talla = $talla;
	}

	/**
	 * @return mixed
	 */
	public function getPrecio() {
		return $this->precio;
	}

	/**
	 * @param mixed $precio
	 */
	public function setPrecio($precio) {
		$this->precio = $precio;
	}

	function __toString(): string {
		return "Se vende {$this->nombre} de talla {$this->talla} a {$this->precio}";

	}


}
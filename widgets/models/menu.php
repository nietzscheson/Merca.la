<?php

class menuModelWidget extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function getMenu(){
		$menu = array(
			array(
				"id"		=>		"cuenta",
				"icono" 	=> 		"user",
				"titulo"	=>		"Cuenta",
				"enlace"	=>		BASE_URL . "cuenta"

			),
			array(
				"id"		=>		"tienda",
				"icono" 	=> 		"shopping-cart",
				"titulo"	=>		"Tienda",
				"enlace"	=>		BASE_URL . "cuenta/tienda"
			),

			array(
				"id"		=>		"compras",
				"icono" 	=> 		"gift",
				"titulo"	=>		"Compras",
				"enlace"	=>		BASE_URL . "cuenta/compras"

			),

			array(
				"id"		=>		"lista-deseos",
				"icono" 	=> 		"list",
				"titulo"	=>		"Lista de deseos",
				"enlace"	=>		BASE_URL . "cuenta/listasdeseos"

			),

		);

		return $menu;
	}


}


?>

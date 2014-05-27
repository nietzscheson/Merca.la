<?php 


class tiendaController extends Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->_view->assign("titulo","Mi tienda");
		//$this->_view->assign("usuarios",$this->_usuarios->getUsuarios());
		$this->_view->renderizar("index");
	}


}


?>
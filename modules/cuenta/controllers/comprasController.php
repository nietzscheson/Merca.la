<?php 


class comprasController extends cuentaController{

	public function __construct(){
		parent::__construct();
		if(!Session::get("autenticado")){$this->redireccionar("login");exit;}
	}

	public function index(){
		$this->_view->assign("titulo","Compras");
		//$this->_view->assign("usuarios",$this->_usuarios->getUsuarios());
		$this->_view->renderizar("index");
	}


}


?>
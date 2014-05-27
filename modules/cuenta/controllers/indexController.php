<?php 

class indexController extends cuentaController{

	private $_usuario;

	public function __construct(){
		parent::__construct();

		if(!Session::get("autenticado")){$this->redireccionar("login");exit;}

		$this->_usuario = $this->loadModel("index");

	}

	public function index(){
		if(!Session::get("autenticado")){$this->redireccionar("login");exit;}
		$this->_view->assign("titulo","Datos de cuenta");
		$this->_view->assign("usuario",$this->_usuario->getUsuario($_SESSION["id_usuario"]));
		
		//$usuario = $this->_usuario->getUsuarios($_SESSION["id_usuario"]);

		$this->_view->renderizar("index");
	}
}



?>
<?php 


class listasdeseosController extends Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->_view->assign("titulo","Listas de deseos");
		//$this->_view->assign("usuarios",$this->_usuarios->getUsuarios());
		$this->_view->renderizar("index");
	}


}


?>
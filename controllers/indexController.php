<?php

class indexController extends Controller{

	public function __construct(){
		parent::__construct();
		if(!Session::get("autenticado")){$this->redireccionar("login");exit;}

	}

	public function index(){
		//print_r($this->_view->getLayoutPositions());
		$this->_view->assign("titulo","Portada");
		//$this->_view->assign("widget",$this->_view->widget("menu","getMenu"));
		$this->_view->renderizar("index","index");
	}

}



?>

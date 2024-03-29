<?php 


class Request{

	private $_controlador;
	private $_metodo;
	private $_argumentos;
	private $_modulo;
	private $_modules;

	public function __construct(){
		if(isset($_GET["url"])){
			$url = filter_input(INPUT_GET, "url",FILTER_SANITIZE_URL);
			$url = explode("/", $url); //Divide la url cada vez que encuentra un slash
			$url = array_filter($url);

			$this->_modules = array("usuarios","cuenta");
			$this->_modulo = strtolower(array_shift($url));

			if(!$this->_modulo){
				$this->_modulo = false;
			}else{
				if(count($this->_modules)){
					if(!in_array($this->_modulo, $this->_modules)){
						$this->_controlador = $this->_modulo;
						$this->_modulo = false;
					}else{
						$this->_controlador = strtolower(array_shift($url));
						if(!$this->_controlador){
							$this->_controlador = "index";
						}
					}
				}else{
					$this->_controlador = $this->_modulo;
					$this->_modulo = false;
				}
			}

			$this->_metodo = strtolower( array_shift($url) );
			$this->_argmumentos = $url;

		}

		

		if(!$this->_controlador){
			$this->_controlador = DEFAULT_CONTROLLER;
		}

		if(!$this->_metodo){
			$this->_metodo = "index";
		}

		if(!isset($this->_argmumentos)){
			$this->_argmumentos = array();
		}

	}

	public function getModulo(){
		return $this->_modulo;
	}

	public function getControlador(){
		return $this->_controlador;
	}

	public function getMetodo(){
		return $this->_metodo;
	}

	public function getArgs(){
		return $this->_argmumentos;
	}


}



?>
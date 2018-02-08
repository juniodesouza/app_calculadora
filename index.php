<?php

require_once "config/Settings.php";

class AppCalculadora{
	
	public $params=array();
	
	public function __construct(){
		$this->start();
	}
	
	/**
	 * Inicia a Aplicação
	 */
	private function start(){
		
		$this->getParams();
		
		switch ($this->getParamURL(1)){
			
			case "usuarios":
				require_once DIR_APP."controller/Usuario.php";
			break;
			
			case "calculadora":
				require_once DIR_APP."controller/Calculadora.php";
			break;
			
			default:
				require_once DIR_APP."controller/Login.php";
			break;
		}
	}
	
	
	/**
	 * Recupera um parametro informado na URL
	 */
	public function getParamURL($key){
		if (isset($this->params[$key])){
			return $this->params[$key];
		}
	}
	
	/**
	 * Recupera os parametros de uma URL amigavel
	 */
	private function getParams(){
		$url = explode("/", $_SERVER["REQUEST_URI"]);
		foreach ($url as $key => $value) {
			if ($value!==""){
				$par = explode("?", $value);
				$this->params[] = $par[0];
			}
		}
	}
	
}
new AppCalculadora();
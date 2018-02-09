<?php

require_once "config/Settings.php";
require_once 'controller/Conexao.class.php';

class AppCalculadora{
	
	public $params=array();
	
	public function __construct(){
		
		// Inicia a sessão
		if(!isset($_SESSION))@session_start();
		
		// Inicia a aplicação
		$this->start();
	}
	
	/**
	 * Inicia a Aplicação
	 */
	private function start(){
		
		// Recupera os parametros da URL
		$this->getParams();
		
		// Verifica qual tela acessar
		switch ($this->getParamURL(1)){
			case "usuarios":{
				$this->validarSessao();
				require_once DIR_APP."controller/Usuario.php";
			}break;
			
			case "calculadora":{
				$this->validarSessao();
				require_once DIR_APP."controller/Calculadora.php";
			}break;
			
			case "relatorio":{
				$this->validarSessao();
				require_once DIR_APP."controller/Relatorio.php";
			}break;
			
			case "sair":{
				
				// Limpa a sessão
				$_SESSION = array();
				
				// Destroy a sessãoo
				session_destroy();
				
				// Redireciona para a tela de login
				header("Location: ".APP_URL);
				exit();
				
			}break;
			
			default:
				require_once DIR_APP."controller/Login.php";
			break;
		}
	}
	
	/**
	 * Validação para ver se o usuario esta logado
	 */
	public function validarSessao(){
		
		if(!isset($_SESSION["usu_id"])){
			header("Location: ".APP_URL);
			exit();
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
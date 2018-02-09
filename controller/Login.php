<?php

class Login{
	
	public function __construct(){
		
		if (isset($_POST["acao"]) && $_POST["acao"]=="logar"){
			$this->logar();
		}else{
			$this->display();
		}
	}
	
	/**
	 * Faz a validação do usuario ao entrar no sistema
	 * @author Junio de souza
	 */
	private function logar(){
		
		// Conexão com o banco de dados
		$conex = Conexao::getConnection();
		
		// Monta o Sql
		$sql = " SELECT * FROM usuarios WHERE usu_login=? AND usu_senha=? LIMIT 1";
		
		// Prepara a query
		$stm = $conex->prepare($sql);
		
		// Seta os valores do parametro
		$stm->bindValue(1, $_POST["login"]);
		$stm->bindValue(2, md5($_POST["senha"]));
		
		// Executa a query
		if ($stm->execute() && $stm->rowCount() > 0) {
			
			// Extrai os dados
			$dadosUsuario = $stm->fetch(PDO::FETCH_ASSOC);
			
			//Cria a sessão
			$_SESSION['usu_id'] 	= $dadosUsuario['usu_id'];
			$_SESSION['usu_login'] 	= $dadosUsuario['usu_login'];
			$_SESSION['usu_nome'] 	= $dadosUsuario['usu_nome'];

			// Redireciona para a pagina principal do sistema
			header("Location: ".APP_URL."calculadora/");
			exit();
			
		}else{
			define("ERROR_LOGIN", TRUE);
			$this->display();
		}
	
	}
	
	/**
	 * Exibe a tela
	 */
	public function display(){
		require_once DIR_APP.'view/Login.tpl.php';
	}
}
new Login();
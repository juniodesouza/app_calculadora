<?php

class Usuario{
	
	public function __construct(){
		if (isset($_POST["acao"]) && $_POST["acao"]=="cadastrar"){
			$this->cadastrar();
			
		}else if (isset($_POST["acao"]) && $_POST["acao"]=="excluir"){
			$this->excluir();
			
		}else{
			$this->display();
		}
	}
	
	public function excluir(){
		
		try {
				
			// Conexão com o banco de dados
			$conex = Conexao::getConnection();
				
			// Monta o Sql
			$sql = " DELETE FROM usuarios WHERE usu_id=? ";
				
			// Prepara a query
			$stm = $conex->prepare($sql);
				
			// Seta os valores do parametro
			$stm->bindValue(1, $_POST["usu_id"]);
				
			// Executa a query
			if ($stm->execute()) {
				$status = true;
				$message="";
			}else{
				$erro = $stm->errorInfo();
				throw new Exception("Erro ao excluir usuário!\n\n".$erro[2]);
			}
				
		} catch (Exception $e){
			$status = false;
			$message = $e->getMessage();
		}
		
		// Retorno
		echo json_encode(array("status"=>$status, "message"=>$message));
		
	}
	
	public function cadastrar(){
		
		try {
			
			// Validação de Senha
			if ($_POST["usu_senha"]!=$_POST["usu_senha_2"]){
				throw new Exception("Senha diferente da confirmação!");
			}
			
			// Conexão com o banco de dados
			$conex = Conexao::getConnection();
			
			// Valida se já existe o login
			$sql = " SELECT * FROM usuarios WHERE usu_login=? LIMIT 1";
			$stm = $conex->prepare($sql);
			$stm->bindValue(1, $_POST["usu_login"]);
			if ($stm->execute() && $stm->rowCount()>0){
				throw new Exception("Login já existente no sistema!");
			}
			
			// Monta o Sql
			$sql = " INSERT INTO usuarios(usu_nome,usu_login,usu_senha) VALUES (?,?,?)";
			
			// Prepara a query
			$stm = $conex->prepare($sql);
			
			// Seta os valores do parametro
			$stm->bindValue(1, $_POST["usu_nome"]);
			$stm->bindValue(2, $_POST["usu_login"]);
			$stm->bindValue(3, md5($_POST["usu_senha"]));
			
			// Executa a query
			if ($stm->execute()) {
				$status = true;
				$message="";
			}else{
				$erro = $stm->errorInfo();
				throw new Exception("Erro ao cadastrar usuário!\n\n".$erro[2]);
			}
			
			
		} catch (Exception $e){
			$status = false;
			$message = $e->getMessage();
		}
		
		// Retorno
		echo json_encode(array("status"=>$status, "message"=>$message));
		
	}
	
	public static function listAll(){
		
		// Conexão com o banco de dados
		$conex = Conexao::getConnection();
		
		// Monta o Sql
		$sql = " SELECT * FROM usuarios";
		
		// Prepara a query
		$stm = $conex->prepare($sql);
		
		// Executa a query
		if ($stm->execute()) {
			return $stm->fetchAll(PDO::FETCH_ASSOC);
		}
		
	}
	
	/**
	 * Exibe a tela
	 */
	public function display(){
		require_once DIR_APP.'view/Usuario.tpl.php';
	}
	
}
new Usuario();
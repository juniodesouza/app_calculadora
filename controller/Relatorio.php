<?php

class Relatorio{
	
	public function __construct(){
		$this->display();
	}
	
	
	public static function listOperacoes(){
		
		if (isset($_POST["acao"]) && $_POST["acao"]=="gerarRelatorio"){
			
			// Conexão com o banco de dados
			$conex = Conexao::getConnection();
			
			// Filtro de Data
			$filtroData="";
			if (isset($_POST["data_ini"]) && $_POST["data_ini"]!=""){
				$filtroData =" AND ope_data >='{$_POST["data_ini"]}'";
			}
			if (isset($_POST["data_fim"]) && $_POST["data_fim"]!=""){
				$filtroData.=" AND ope_data <='{$_POST["data_fim"]}'";
			}
			
			// Filtro por Responsavel
			$filtroResponsavel="";
			if (isset($_POST["usu_nome"]) && $_POST["usu_nome"]!=""){
				$filtroResponsavel.="AND UPPER(usu_nome) LIKE UPPER('%".addslashes($_POST["usu_nome"])."%')";
			}
			
			// Monta o Sql
			$sql = " 
				SELECT
					*
				FROM
					operacoes 
					INNER JOIN usuarios USING (usu_id)
				WHERE
					TRUE
					{$filtroData}
					{$filtroResponsavel}
				ORDER BY
					ope_data DESC, ope_id DESC
			";
					
			// Prepara a query
			$stm = $conex->prepare($sql);
			
			// Executa a query
			if ($stm->execute()) {
				return $stm->fetchAll(PDO::FETCH_ASSOC);
			}
			
		}

		
		return array();
	}
	
	
	/**
	 * Exibe a tela
	 */
	public function display(){
		require_once DIR_APP.'view/Relatorio.tpl.php';
	}
}
new Relatorio();
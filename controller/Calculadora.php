<?php

class Calculadora{
	
	public function __construct(){
		if (isset($_POST["acao"]) && $_POST["acao"]=="calcular"){
			$this->calcular();
		}else{
			$this->display();
		}
	}
	
	/**
	 * Método para o calculo da expressão
	 */
	public function calcular(){
		
		$result=0;
		$expressao = $_POST["expressao"] ? $_POST["expressao"] : 0;
		
		// troca os Operadores
		$expressao = str_replace(array(" ", "÷", "x", ","), array("", "/", "*", "."), $expressao);
		
		// Raiz Quadrada
		if (count(explode("√", $expressao))>1){
			$expressao = " Calculadora::raiz_quadrada(".str_replace("√", "", $expressao).")";
		}
		
		// Porcentagem
		if (count(explode("%", $expressao))>1){
			if (count(explode("-", $expressao))>1){
				$parts = explode("-", $expressao);
				
			}else if (count(explode("+", $expressao))>1){
				$parts = explode("+", $expressao);
				
			}else if (count(explode("÷", $expressao))>1){
				$parts = explode("÷", $expressao);
				
			}else if (count(explode("/", $expressao))>1){
				$parts = explode("/", $expressao);
				
			}else if (count(explode("x", $expressao))>1){
				$parts = explode("x", $expressao);
				
			}else if (count(explode("*", $expressao))>1){
				$parts = explode("*", $expressao);
			}
			
			$valorP = str_replace("%", "", $parts[1]);
			$valorP = $valorP/100;
			$valorP = $parts[0]*$valorP;
			
			$expressao = str_replace("{$parts[1]}", $valorP, $expressao);
		}
		
		// Efetua o calculo
		eval(' $result = '.$expressao.'; ');
		
		// Volta o padrão BR
		$result = str_replace(".", ",", $result);
		
		// Retorno
		echo json_encode(array("status"=>true, "result"=>$result));
	}
	
	public static function raiz_quadrada($valor){
		for($i=0;$i*$i<=$valor;$i++){
			$result = $i*$i;
			$i++;
		}
		$y = $i-1;
		$v1 = ($i*$i)-$valor;
		$v2 = $valor-($y*$y);
		if($v1<$v2){
			$result = $i*$i;
		}elseif($v1>$v2){
			$result = $y*$y;
			--$i;
		}
		return ($valor+$result)/(2*$i);
	}
	
	/**
	 * Exibe a tela
	 */
	public function display(){
		require_once DIR_APP.'view/Calculadora.tpl.php';
	}
}
new Calculadora();
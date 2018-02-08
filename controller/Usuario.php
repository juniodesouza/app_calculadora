<?php

class Usuario{
	
	public function __construct(){
		
		require_once DIR_APP.'view/Usuario.tpl.php';
	}
}
new Usuario();
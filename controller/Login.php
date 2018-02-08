<?php

class Login{
	
	public function __construct(){
		
		require_once DIR_APP.'view/Login.tpl.php';
	}
}
new Login();
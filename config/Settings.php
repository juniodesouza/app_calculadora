<?php

// Charset do sistema
header ('Content-type: text/html; charset=UTF-8');

// Define o timezone
date_default_timezone_set('America/Sao_Paulo');

// Erros
error_reporting(E_ALL); ini_set('display_errors',false);

// Diretório da Aplicação
define("DIR_APP", str_replace("config/Settings.php","", __FILE__));

// Configurações de banco de dados
define("DB_TYPE"	, "mysql");
define('DB_USER'	, "root");
define('DB_PASSWD'	, "123");
define("DB_HOST"	, "127.0.0.1");
define("DB_NAME"	, "app_calculadora");

// Caminhos do Projeto
define("APP_URL", "http://{$_SERVER["SERVER_NAME"]}"."/app_calculadora/");
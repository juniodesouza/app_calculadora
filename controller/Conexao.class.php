<?php
/**
 * Classe responsavel pela conexão com o banco de dados
 * @author Junio
 */
class Conexao{
	/**
	 * Armazena o servidor de banco de dados
	 * @var String
	 */
	private $host = DB_HOST;
	
	/**
	 * Armazena o nome do banco de dados
	 * @var String
	 */
	private $database = DB_NAME;
	
	/**
	 * Armazena o nome do gerenciador do banco de dados
	 * @var String
	 */
	private $gerenciador = DB_TYPE;
	
	/**
	 * Armazena o usuario do banco de dados
	 * @var String
	 */
	private $user = DB_USER;
	
	/**
	 * Armazena a senha do banco de dados
	 * @var string
	 */
	private $password = DB_PASSWD;
	
	/**
	 * Armazena a instancia do objeto
	 * @var Conexao
	 */
	public static $instance;
	
	/** 
	 * Armazena uma conexão
	 * @var PDO
	 */
	public $conex = NULL;
	
	/**
	 * Construtor da classe 
	 * @throws PDOException
	 */
	public function __construct(){
		try {
			// Cria a string de conexão
			$strConexao =  $this->gerenciador.':dbname='.$this->database.';host='.$this->host.';';	
			
			// Cria um Objeto PDO
			$this->conex = new PDO($strConexao, $this->user, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_PERSISTENT => true) );
		} catch (PDOException $e) {
			echo "Erro na conexão com o banco de dados: {$e->getMessage()}";
			die();
		}
	}
	
	/**
	 * Retorna uma conexão com o banco de dados
	 * @author Junio de Souza
	 * @return PDO
	 */
	public static function getConnection(){
		
		// Verifica se existe instancia da classe
		if(!self::$instance) {					
			self::$instance = new Conexao();
		}

		// Retorna a conexão da instancia
		return self::$instance->conex;
	}
		
	/**
	 * Fecha a conexão com o banco de dados
	 * @author Junio de Souza
	 */
	public function closeConex () {
		// Fecha a conexão com o banco de dados
		$this->conex = NULL;
	}
}
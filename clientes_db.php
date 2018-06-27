<?php

class Database {
	
	private $obj;
	private $host = 'localhost';
	private $username = 'root';
	private $password = '';
	private $database = 'avaliacao';
	private $option = [
		\PDO::ATTR_CASE => \PDO::CASE_NATURAL,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
        \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
	];

	public function __construct() {
		try {
			$this->obj = new \PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password, $this->option);
			$this->obj->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		} catch(\Exception $e) {
			echo $e->getMessage();
			die;
		}
	}

	public function getCliente($name) {
        $db = $this->obj->prepare("SELECT t1.cli_id, t1.cli_nome, t1.cli_idade, t1.cli_telefone, t1.cli_endereco, t2.cat_codigo, t2.cat_nome, t2.cat_status FROM tbl_clientes AS t1 INNER JOIN tbl_categorias AS t2 ON (t1.cat_codigo = t2.cat_codigo) WHERE t1.cli_nome = :name");
        $db->bindParam(":name", $name);
        $db->execute();
        	return json_encode($db->fetchAll());
	}
}

$database = new Database();
echo $database->getCliente($_POST['name']);
?>
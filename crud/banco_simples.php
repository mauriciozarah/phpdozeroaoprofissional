<?php

class Banco{
	private $pdo;
	private $numRows;
	private $array;

	public function __construct(){
		try{
			$this->pdo = new PDO('mysql:dbname=crud_oo;host=localhost;', 'root', '123');
		}catch(PDOException $e){
			echo "Erro: " . $e->getMessage();
		}
	}

	public function query($sql){
		$res = $this->pdo->query($sql);
		$this->numRows = $res->rowCount();
		$this->array = $res->fetchAll();
	}

	public function result(){
		return $this->array;
	}

	public function numRows(){
		return $this->numRows;
	}

	public function insert($table, $data){
		if(!empty($table) && is_array($data) && count($data) > 0):

			$sql = "INSERT INTO " . $table . " SET ";
			$dados = array();
			foreach($data as $idx => $valor):
				$dados[] = $idx . " = '" . addslashes($valor) . "'";
			endforeach;

			$sql .= implode(", ", $dados);

			$this->pdo->query($sql);

		endif;	
	}	
}
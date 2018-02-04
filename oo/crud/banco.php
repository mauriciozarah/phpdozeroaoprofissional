<?php

class Banco{
	

	private $pdo     = NULL;
	private $numRows = NULL;
	private $array   = array();

	public function __construct($host, $dbname, $dbuser, $dbpass){
		try{
			$this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $dbuser, $dbpass);
		}catch(Exception $e){
			echo "Falhou: " . $e->getMessage();
		}
	}

	public function query($sql){
		
		$query = $this->pdo->query($sql);
		$this->numRows =  $query->rowCount();
		$this->array = $query->fetchAll();
	}

	public function result(){
		return $this->array;
	}

	public function insert($table, $array){
		if(!empty($table) && is_array($array) && count($array) > 0):
		

			$sql = "INSERT INTO " . $table . " SET ";
			$dados = array();
			foreach($array as $chave => $valor):

				$dados[] = $chave . " = '" . addslashes($valor) . "'";

			endforeach;	

			$sql = $sql . implode(",", $dados);

			//echo $sql;

			$this->pdo->query($sql);

		endif;
	}

	public function update($table, $array, $where = array(), $where_cond = " AND "){
		if(!empty($table) && count($array) > 0 && is_array($where)):
			$sql = "UPDATE " . $table . " SET ";
			$dados = array();
		
			foreach($array as $chave => $valor):
				$dados[] = $chave . " = '" . addslashes($valor) . "'";
			endforeach;

			$sql = $sql . implode(", ", $dados);


			if(count($where) > 0){
				$dados = array();
				foreach($where as $chave => $valor){
					$dados[] = $chave . " = '" addslashes($valor) . "'";
				}
				$sql = $sql . " WHERE " . implode(" " . $where_cond . " ", $dados);
			}

			echo $sql;

		endif;
	}

	public function numRows(){
		return $this->numRows;
	}


}
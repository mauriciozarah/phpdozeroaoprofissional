<?php

class Banco{
	
	private static $instance = "";

	private function __construct(){}

	public static function getInstance(){
		if(!isset(self::$instance)){
			try{
				self::$instance = new PDO('mysql:dbname=crud_oo;host=localhost;', 'root', '123');				
			}catch(PDOException $e){
				echo "Error:" . $e->getMessage();
			}
		}

		return self::$instance;
	}
}


$banco = Banco::getInstance();
$sql = "SELECT * FROM tb_pessoa";
$banco->query($sql);
<?php
$dsn  = "mysql:dbname=crud_oo;host=localhost";
$user = "root";
$pass = "123";

try{
	$pdo = new PDO($dsn, $user, $pass);
	$sql = "SELECT * FROM tb_pessoa";
	$sql = $pdo->query($sql);

	if($sql->rowCount() > 0):
		foreach($sql->fetchAll() as $value):
			echo "Nome:" . $value['nome'] . ", Sobrenome:" . $value['sobrenome'] . "<br><br>";
		endforeach;
	endif;


}catch(PDOException $e){
	echo $e->getMessage();
}

?>
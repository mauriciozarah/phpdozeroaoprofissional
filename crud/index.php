<?php
	require_once "banco_simples.php";
	$b = new Banco();

	$b->query('SELECT * FROM tb_pessoa');
	echo "Qtd Registros: " . $b->numRows() . "<br><br>";

	if($b->numRows() > 0):
		foreach($b->result() as $post):
			echo "Nome:" . $post['nome'] . ", Sobrenome:" . $post['sobrenome'] . "<br>"; 
		endforeach;
	else:
		echo "nao houve resultado";
	endif;

	//print_r($r);

	//inserção
	$b->insert("tb_pessoa", array(
		"nome"      => "Luis Carlos",
		"sobrenome" => "Mariano Zaha"
	));
?>


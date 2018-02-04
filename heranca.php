<?php

class Animal{
	public $nome;
	private $idade;
}

class Cavalo extends Animal{
	private $qtd_patas;
	private $tipo_pelo;
}

class Gato extends Animal{
	private $qtd_patas;
	private $tipo_pelo;
}

$cavalo = new Cavalo();
$cavalo->nome = "Bonieky";
echo $cavalo->nome;

?>
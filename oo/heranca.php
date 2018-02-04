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
	private $miado;
}

$cavalo = new Cavalo();

$cavalo->nome = "Gilberto Avalone";

echo "O nome do cavalo eh: " . $cavalo->nome;
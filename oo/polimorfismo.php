<?php

class Animal{
	public function getNome(){
		echo "getNome da classe Animal";
	}

	public function testar(){
		echo "Testando";
	}
}

class Cachorro extends Animal{
	//sobrescrevendo o metodo getNome da classe mãe
	public function getNome(){
		echo "getNome da classe Cachorro<br>";
		$this->testar();
	}
}


$cachorro = new Cachorro();
$cachorro->getNome();
<?php

class Animal{
	public function getNome(){
		echo "getNome da Classe animal";
	}

	public function testar(){
		echo "testando";
	}
}

class Cachorro extends Animal{
	//a funççao getNome abaixo sobrescreveu a getNome da class mãe "Animal"
	public function getNome(){
		//this testar é da classe mãe Animal chamada aqui como  $this->testar pois ela herda todas as funções
		$this->testar();
	}
}

//instanciando cachorro
$cachorro = new Cachorro();
echo "<br><br>" . $cachorro->getNome();

?>
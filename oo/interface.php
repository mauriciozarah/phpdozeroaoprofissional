<?php

/*--------------------------------------------------------------------------------
|
|	a INTERFACE SERVE DE MODELO (ESQUELETO) PARA OUTRAS CLASSES QUE HERDAREM ELA
|	todo o metodo de uma interface tem que ser "publico" e todas as classes que implementarem
|   essa interface tem que obrigatóriamente ter todas as funções e atributos da interface
|   "INTERFACE" é o objeto minimo que outras classes que a utilizam tem que ter ao implementarem ela
|
|--------------------------------------------------------------------------------*/

interface Animal{
	public function andar();
	public function peidar();
}



class Cachorro implements Animal{
	public function andar(){
		echo "Estou andando";
	}
	public function peidar(){
		echo "Estou peidando";
	}
}

class Gato implements Animal{
	public function andar(){
		echo "Ando devagar";
	}
	public function peidar(){
		echo "Peido dengoso";
	}
	public function miar(){
		echo "mial";
	}
}

$cachorro = new Cachorro();
$cachorro->andar();

echo "<br><br>";

$cachorro->peidar();

echo "<br><br>";

$gato = new Gato();
$gato->miar();
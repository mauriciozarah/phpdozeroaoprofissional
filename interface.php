<?php

interface Animal{

	/*-----------------------------------------------------------------------------------------------
	| 
	|  Todo o método de uma interface tem que ser publicos, pois as classes que implementam ela
	|  Precisam ter acesso às funçoes
	|------------------------------------------------------------------------------------------------*/

	public function andar();

}

class Cachorro implements Animal{
	public function andar(){
		echo "Estou andando";
	}
}

class Gato implements Animal{
	public function andar(){
		echo "O gato está andando.";
	}
}


$cachorro = new Cachorro();
echo $cachorro->andar();

echo "<p>&nbsp;</p>";

$gato = new Gato();
echo $gato->andar();
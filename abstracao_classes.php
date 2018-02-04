<?php

/*----------------------------------------------------------------------------------------------
|
| Se há alguma variavel ou função abstrata dentro de uma classe esta mesma tem que ser abstrata
|
|----------------------------------------------------------------------------------------------*/

abstract class Animal{
	private $nome;
	private $idade;

	//funções abstratas são sempre protegidas
	abstract protected function andar();

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}
}

class Cavalo extends Animal{

	/*-------------------------------------
	|
	|    Aqui é imperativo que extendendo Animal ele tenha que ter uma função andar
	|	 que é abstrata na classe mãe
	|
	|--------------------------------------*/

	public function andar(){
		echo "O cavalo está andando";
	}

}

$cavalo = new Cavalo();
$cavalo->andar();
$cavalo->setNome("Espoleta");
echo "<br><br><br>" . $cavalo->getNome();


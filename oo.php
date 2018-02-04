<?php
class Cachorro{
	public $nome;
	private $idade;
}
$cachorro = new Cachorro();
$cachorro->nome = "Lulu";
echo $cachorro->nome;


/*===================================================
|
|       Criação de objetos com propriedades privadas
|
|====================================================*/

class Carro
{
	private $marcaPneu  = NULL;
	private $marcaBanco = NULL;

	public function getPneu(){
		return $this->marcaPneu;
	}

	public function setPneu($pneu){
		$this->marcaPneu = $pneu;
	}

	public function getBanco(){
		return $this->marcaBanco;
	}

	public function setBanco($banco){
		$this->marcaBanco = $banco;
	}
}

$carro = new Carro();
$carro->setPneu('Turanza');
$carro->setBanco('Recaro');

echo "<br><br><br>O pneu é " . $carro->getPneu() . ", o Banco é " . $carro->getBanco();





/*====================================================================
|
|   O.O. construtor com parametros preenchendo propriedades privadas
|
|===================================================================*/

class Livro{
	private $autor = NULL;
	private $isbn  = NULL;

	public function __construct($autor, $isbn){
		$this->setAutor($autor);
		$this->setIsbn($isbn);
	}

	public function setAutor($a){
		$this->autor = $a;
	}

	public function getAutor(){
		return $this->autor;
	}

	public function setIsbn($a){
		$this->isbn = $a;
	}

	public function getIsbn(){
		return $this->isbn;
	}
}

$livro = new Livro('Carlos Drummont de Andrade', '0215474514514');
echo "<br><br><br>Autor:" . $livro->getAutor() . ", ISBN:" . $livro->getIsbn();

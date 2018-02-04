<?php

abstract class Animal{
	public $nome;
	private $idade;

	abstract protected function andar();
	/*==================================================================================================
	|
	|  função acima é abstrata e transforma esta classe em um "GUIA" para as classes que estendem ela]
	|  QUANDO ADICIONO AO MENOS UMA FUNÇÃO ABSTRATA A CLASSE OBRIGATÓRIAMENTE TEM QUE SER ABSTRATA TAMBEM
	|
	=====================================================================================================*/

	public function setNome($n){
		$this->nome = $n;
	}

	public function getNome(){
		return $this->nome;
	}

}

/*=====================================================================================================================
|
|	A Classe Cavalo abaixo que estende a abstract Animal tem que implementar a função abstrata "andar" OBRIGATÓRIAMENTE	
|	CAVALO AINDA CONTINUA HERDANDO AS FUNÇÕES PROTECTED E PUBLIC DA CLASSE ABSTRATA
|
|=====================================================================================================================*/

class Cavalo extends Animal{
	private $qtd_patas;
	private $tipo_pelo;

	public function andar(){
		echo "Estou andando...";
	}

	public function nomear($nome){
		//a função abaixo setNome é da classe pai (mesmo sendo abstrata a classe filha herda as funções publicas e protegidas, não as privadas)
		$this->setNome($nome);
	}

	public function peganome(){
		return $this->getNome();
	}
}

/*=========================
|
|  TESTANDO
|
|==========================*/

$cavalo = new Cavalo();
$cavalo->setNome("Cavalo Teste");

echo "O Cavalo é: " . $cavalo->getNome();

echo "<br><br>";

$cavalo->andar();

$cavalo->nomear("Doidao");
echo "<br><br>";
echo $cavalo->peganome();
<?php

class Calculadora{
	private $n;

	public function __construct($nInicial){
		$this->n = $nInicial;
	}

	public function somar($n1){
		$this->n += $n1;
		return $this;
	}

	public function subtrair($n1){
		$this->n -= $n1;
		return $this;
	}

	public function multiplicar($n1){
		$this->n *= $n1;
		return $this;
	}

	public function dividir($n1){
		$this->n /= $n1;
		return $this;
	}

	public function resultado(){
		return "O resultado eh:" . $this->n;
	}

	/*
	public function somar($n1, $n2){
		return $n1 + $n2;
	}
	public function subtrair($n1, $n2){
		return $n1 - $n2;
	}
	public function multiplicar($n1, $n2){
		return $n1 * $n2;
	}
	public function dividir($n1, $n2){
		return $n1 / $n2;
	}
	*/
}

$calc = new Calculadora(10);
$calc->somar(2)->subtrair(3)->multiplicar(5)->dividir(2)->somar(10)->subtrair(0.5); 
$resultado = $calc->resultado(); //22.5
echo $resultado;


echo "<br><br>";


$calc2 = new Calculadora(20);
$conta = $calc2->somar(1);
$conta = $conta->subtrair(1);
$conta = $conta->multiplicar(5);
$conta = $conta->dividir(5);
$conta = $conta->somar(2);
echo $conta->resultado();
/*
echo "2  + 10 = " . $calc->somar(2,10);
echo "20 - 16 = " . $calc->subtrair(20, 16);
echo "9  * 2  = " . $calc->multiplicar(9, 2);
echo "12 / 2  = " . $calc->dividir(12, 2);
*/



<?php

/*Chamando classes dentro de funções em outra classe*/

class Primeira
{
	private static $a = 0;
	private static $b = 0;

	public function __construct(){}

	public static function soma(){
		return (self::$a + self::$b);
	}

	public static function setA($a){
		self::$a = $a;
	}

	public static function setB($b){
		self::$b = $b;
	}
}

class Segunda
{
	public static function geraNumeros(Primeira $primeira){
		$p = $primeira;
		
		return $p::soma();
	}
}


$first = new Primeira();
$first::setA(10);
$first::setB(10);




echo Segunda::geraNumeros($first);
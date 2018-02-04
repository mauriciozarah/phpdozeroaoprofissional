<?php

$produtos = array(
	0 => array(
		"nome" => "melao",
		"qtd"  => "3"
	),
	1 => array(
		"nome" => "abacate",
		"qtd"  => "2"
	)
);

$produtos[] = array(
	"nome" => "melancia", 
	"qtd" => 3
);

//print_r($produtos[2]);

echo $produtos[0]['nome'];

$a = '2';
$b = 2;

echo ($a + $b); // da 4

echo "<br><br><br>";

class ObjCliente
{
	private $nome = "";
	private $sobrenome = "";

	public function __construct(){}

	public function setCliente($stdObj){
		$this->nome = $stdObj->nome;
		$this->sobrenome = $stdObj->sobrenome;
	}

	public function getNome(){
		return $this->nome;
	}

	public function getSobrenome(){
		return $this->$sobrenome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function setSobrenome($sobrenome){
		$this->sobrenome = $sobrenome;
	}
}



for($i=0;$i<=12;$i++):

	$stdObj = new stdClass();
	$stdObj->nome = "Mauricio $i";
	$stdObj->sobrenome = "Zaha $i";

	$obj = new ObjCliente();
	$obj->setCliente($stdObj);

	$clientes[$i] = $obj;

	unset($stdObj);
	unset($obj);

endfor;


//echo "<pre>";
//print_r($clientes);

/*
$obj = new stdClass();
$obj->nome = "Mauricio";
$obj->sobrenome = "Zaha";

ObjCliente::setCliente($obj);

echo ObjCliente::getNome() . " " . ObjCliente::getSobrenome();
*/

/*
echo $clientes[0]->getNome()  . "<br>";
echo $clientes[1]->getNome()  . "<br>";
echo $clientes[2]->getNome()  . "<br>";
echo $clientes[3]->getNome()  . "<br>";
echo $clientes[4]->getNome()  . "<br>";
echo $clientes[5]->getNome()  . "<br>";
echo $clientes[6]->getNome()  . "<br>";
echo $clientes[7]->getNome()  . "<br>";
echo $clientes[8]->getNome()  . "<br>";
echo $clientes[9]->getNome()  . "<br>";
echo $clientes[10]->getNome() . "<br>";
echo $clientes[11]->getNome() . "<br>";
echo $clientes[12]->getNome() . "<br>";
*/

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Json carregando através do Banco de Dados</title>
	<meta charset="utf-8" />
</head>
<body>

<button type="button" id="btn">Chamar o objeto Json</button>
<script type="text/javascript" src="jquery.min.js"></script>
<script>
	$("#btn").on('click', function(){
		$.ajax({
			url:"buscaJson.php",
			type:"post",
			dataType:"json",
			data:{'val':'ok'},
			success:function(data){
				var p = new Pessoa();
				p.atribui(data);
				p.mostra();
			},
			error:function(xhr, err){
				console.log("xhr:"+xhr+", err:"+err);
			}
		});
	});

	//objeto
	var Pessoa = function(){
		var nome = "";
		var sobrenome = "";
		this.atribui = function(dados){
			this.nome      = dados.nome;
			this.sobrenome = dados.sobrenome;
		}
		this.mostra = function(){
			alert("Olá " + this.nome + " " + this.sobrenome);
		}
	}

	//notação json não é objeto
	var Pes = {
		nome:"",
		sobrenome:"",
		mostra: function(){
			alert("Olá " + this.nome + " " + this.sobrenome);
		}
	};
</script>
</body>
</html>
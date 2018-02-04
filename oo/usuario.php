<?php 

class Usuario{
	private $nome  = NULL;
	private $senha = NULL;
	private $email = NULL;
	private static $instance = NULL;

	private function __construct($post=NULL){
		if($post != NULL):

			$this->nome  = $post['nome'];
			$this->senha = sha1($post['senha']);
			$this->email = $post['email'];
		endif;	
	}

	public static function get_instance($post=NULL){
		if(!isset(self::$instance)):
			self::$instance = new Usuario($post);
		endif;
		return self::$instance;
	}

	public function getNome(){
		return $this->nome;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setNome($nome=NULL){
		if($nome != NULL):
			$this->nome = $nome;
		endif;
	}

	public function setEmail($email=NULL){
		if($email != NULL):
			$this->email = $email;
		endif;
	}
}
$usu['nome']  = "Mauricio Zaha";
$usu['senha'] = "1234567";
$usu['email'] = "mzaha@hotmail.com";
$usuario1 = Usuario::get_instance($usu);

$usu['nome']  = "Larissa Mie Zaha Imou";
$usu['senha'] = "1234567";
$usu['email'] = "larissa22@hotmail.com";
$usuario2 = Usuario::get_instance($usu);

echo $usuario1->getNome();
echo "<br>";
echo $usuario2->getNome();

//o usuario 2 fica com o nome do primeiro usuario pois o objeto é instanciado uma unica vez
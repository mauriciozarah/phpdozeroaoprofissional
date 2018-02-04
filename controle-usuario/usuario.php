 <?php

class Usuario{
	private $id;
	private $email;
	private $senha;
	private $nome;
	private $pdo;


	public function __construct(){
		//criando a conexão pdo
		try{
			$this->pdo = new PDO("mysql:dbname=usuarios;host=localhost", "root", "123");
		}catch(PDOException $e){
			echo "Falhou: " . $e->getMessage();
		}

	}


	public function getOne($i){
		//se i não for vazio preenche seta os dados do usuario no objeto
		if(!empty($i)):
			$sql = "SELECT * FROM usuario WHERE id = ?";
			$sql = $this->pdo->prepare($sql);
			$sql->execute(array($i));

			if($sql->rowCount() > 0):
				$dados = $sql->fetch(); //pega uma unica linha //fetchAll pega todas as linhas

				$this->id    = $dados['id'];
				$this->email = $dados['email'];
				$this->senha = $dados['senha'];
				$this->nome  = $dados['nome'];

			endif;
		endif;
	}


	public function setId($id){
		$this->id = $id;
	}

	public function getId(){
		return $this->id;
	}

	public function setEmail($e){
		$this->email = $e;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setSenha($s){
		$this->senha = md5($s);
	}

	public function getSenha(){
		return $this->senha;
	}

	public function setNome($n){
		$this->nome = $n;
	}

	public function getNome(){
		return $this->nome;
	}



	public function salvar(){
		if(!empty($this->id)):
			$sql = "UPDATE usuario SET email = ?, senha = ?, nome = ? WHERE id = ?";
			$sql = $this->pdo->prepare($sql);
			$sql->execute(array(
				$this->email,
				$this->senha,
				$this->nome,
				$this->id
			));
		else:
			$sql = "INSERT INTO usuario SET email = ?, senha = ?, nome = ?";
			$sql = $this->pdo->prepare($sql);
			$sql->execute(array(
				$this->email,
				$this->senha,
				$this->nome
			));
		endif;
	}

	public function getAll(){
		$sql   = "SELECT * FROM usuario";
		$query = $this->pdo->prepare($sql);
		$query->execute();
		$res   = $query->fetchAll(PDO::FETCH_ASSOC);
		return $res;
	}

	public function setDelete(){
		$sql = "DELETE FROM usuario WHERE id = ?";
		$sql = $this->pdo->prepare($sql);
		$sql->execute(array($this->id));
	}
}
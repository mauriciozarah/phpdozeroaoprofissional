<?php

class Post{
	private $titulo = "";
	private $data = "";
	private $corpo = "";
	private $comentarios = array();
	private $qtComentarios = "";

	public function getTitulo(){
		return $this->titulo;
	}

	public function setTitulo($title=NULL){
		if($title != NULL && strlen($title) > 8 && is_string($title)):
			$this->titulo = $title;
		endif;
	}

	public function getData(){
		return $this->data;
	}

	public function addComentarios($msg){
		$this->comentarios[] = $msg;
		$this->contarComentarios();
	}

	public function getQuantosComentarios(){
		return $this->qtComentarios;
	}

	public function getComentarios(){
		return $this->comentarios;
	}

	private function contarComentarios(){
		$this->qtComentarios = count($this->comentarios);
	}
	//A GRANDE SACADA DE USAR GETTERS E SETTERS É PODER VALIDAR OS VALORES DE ENTRADA NO OBJETO
}

$post = new Post();

$post->addComentarios("Teste1");
$post->addComentarios("Teste2");
$post->addComentarios("Teste3");

echo "Qtd comentarios:" . $post->getQuantosComentarios() . "<br><br>";

$comentarios = $post->getComentarios();
foreach($comentarios as $idx => $value):
	echo $value . "<br>";
endforeach;
<?php

require "banco.php";
$banco = new Banco('localhost', 'blog', 'root', '123');



//
if(isset($_POST["titulo"])):
	$banco->insert('postagem', array(
		"titulo"     =>  $_POST['titulo'],
		"conteudo"   =>  $_POST['conteudo'],
		"data_hora"  =>  date("Y-m-d H:i:s")
	));	
endif;

if(isset($_POST['idpostagem']) && $_POST['op'] == "edit"){
	$banco->update("posts", 
		array("titulo" => $_POST['titulo']), 
		array("id" => $_POST['idpostagem'])
	);
}

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
</head>
<body>
	<table>
		<tr>
			<td>Titulo</td>
			<td>Conteudo</td>
			<td>Editar</td>
			<td>Excluir</td>
		</tr>
<?php
$banco->query("SELECT * FROM postagem ORDER BY idpostagem DESC");
if($banco->numRows() > 0):
	foreach($banco->result() as $post):
?>
		<tr>
			<td><?php echo $post['titulo']; ?></td>
			<td><?php echo $post['conteudo']; ?></td>
			<td><a href="#" onclick="edit('<?php echo $post['idpostagem']?>', '<?php echo $post['titulo']; ?>', '<?php echo $post['conteudo']; ?>');">Editar</a></td>
			<td>Deletar</td>
		</tr>

<?php
	endforeach;
else:
	echo "Não houve resultados";
endif;
?>
	</table>
	<hr />
	<form method="post">
		<table>
			<tr>
				<td>Titulo</td>
				<td><input type="text" name="titulo" id="titulo" value="" /></td>
			</tr>
			<tr>
				<td>Conteudo</td>
				<td><textarea name="conteudo" cols="30" rows="2" id="conteudo" value=""></textarea></td>
			</tr>
			<tr>
				<input type="hidden" name="idpostagem" value="">
				<td colspan="2"><input type="submit" value="Gravar"></td>
			</tr>
		</table>
	</form>
<script>
	var dE = function(elemento){
		return document.getElementById(elemento);
	}
</script>
</body>
</html>
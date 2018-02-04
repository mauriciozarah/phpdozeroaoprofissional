<?php
require_once "usuario.php";

//listando
$users = new Usuario();


//editar
if(isset($_POST['id']) && !empty($_POST['id'])):
	$users->setId($_POST['id']);
	$users->setEmail($_POST['email']);
	$users->setNome($_POST['nome']);
	$users->setSenha($_POST['senha']);
	$users->salvar();
endif;

//BUSCAR PARA EDITAR
if(isset($_GET['id']) && !empty($_GET['id']) && !isset($_GET['op'])):
	$users->getOne($_GET['id']);
	$email = "";
	$nome  = "";
	$senha = "";
	$id    = "";
	$email = $users->getEmail();
	$nome  = $users->getNome();
	$senha = $users->getSenha();
	$id    = $users->getId();
endif;

//editando
if((!isset($_POST['id']) || empty($_POST['id'])) && (isset($_POST['nome']) && !empty($_POST['nome']))):
	$users->setNome($_POST['nome']);
	$users->setEmail($_POST['email']);
	$users->setSenha($_POST['senha']);
	$users->salvar();
endif;

//deletar
if(isset($_GET['id']) && !empty($_GET['id']) && isset($_GET['op']) && $_GET['op'] == "deletar"):
	$users->setId = $_GET['id'];
	$users->setDelete();
	$users->setId = "";
endif;

//listando usuarios
$res   = $users->getAll();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Listagem de Usuários</title>
</head>
<body>
	<table border="1" align="center">
		<tr>
			<td>Nome</td>
			<td>E-mail</td>
			<td>Senha(Criptografada)</td>
			<td colspan="2">Acões</td>	
		</tr>
		<?php
		foreach($res as $value):
		?>
			<tr>
				<td><?=$value['nome']?></td>
				<td><?=$value['email']?></td>
				<td><?=$value['senha']?></td>
				<td><a href="usuario_list.php?id=<?=$value['id']?>">-</a></td>
				<td><a href="usuario_list.php?id=<?=$value['id']?>&op=deletar">X</a></td>	
			</tr>
		<?php
		endforeach;
		?>
	</table>
	<br><br>     
	<form action="" method="post">
		<table border="1" align="center">
			<tr>
				<td>Nome:</td>
				<td><input type="text" name="nome" value="<?=$nome?>" id="nome"></td>
			</tr>
			<tr>
				<td>E-mail:</td>
				<td><input type="email" name="email" value="<?=$email?>" id="email"></td>
			</tr>
			<tr>
				<td>Senha::</td>
				<td><input type="text" name="senha" value="<?=$senha?>" id="senha"></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="hidden" name="id" value="<?=$id?>" id="id_hidden">
					<button type="submit">Inserir</button>
					<button type="button" onclick="inserirNovo();">Inserir Novo</button>
				</td>
				
			</tr>
		</table>
	</form>	
	<script>
		var gE = function(id){
			return document.getElementById(id);
		}

		var inserirNovo = function(){
			window.location = "usuario_list.php";
		}
	</script>
</body>
</html>
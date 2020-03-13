<?php
require_once 'usuario.php';
$u = new Usuario;
?>

<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
	<head>
		<link rel="stylesheet" type="text/css" href="novo/estilo.css">
		<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
		<meta charset="utf-8">
		<title>Login</title>
	</head>
	<body>
		<div class="login">
			<img src="usuario.jpg" class="usuario" width="100" height="100" alt="">
			<h1>Login</h1>
			<form method="POST">
				<p>Usuário</p>
				<input type="text" name="login" placeholder="Insira seu usuário">
				<p>Senha</p>
				<input type="password" name="senha" placeholder="Insira sua senha">
				<input type="submit" name="" value="Login">
			</form>
	</div>
		<footer class="footer">	
    		<div class="footerContainer">
        	<p class="copyright">© OPE - Estética 2019</p>
    </div>
</footer>
		

<?php 
	if(isset($_POST['login'])){
		$login = addslashes($_POST['login']);
		$senha = addslashes($_POST['senha']);

	if (!empty($login) && !empty($senha) )
	 {
		$u->conectar("tcc","localhost","root","");
		if($u->msgErro == ""){

		if($u->logar($login,$senha)){
			header("location: telaInicial.php");
		}
		else{
			echo "Usuario ou senha invalidos!";
		}
	}
}
	else{
		echo "Erro:".$u->msgErro;
	}
}
	else{
		echo "Preencha todos os campos!";
	}

?>
</body>
</html>
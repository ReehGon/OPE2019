<?php
	require_once 'usuario.php';
	$u = new Usuario;


 	session_start();
?>
<!DOCTYPE html>
<html lang="pt">

<!--Início do site-->
<head>
	<meta charset="utf-8">
	<title>Cadastro de Clientes</title>
	<link rel="stylesheet" type="text/css" href="novo/estilo.css">

	<div class="menu">
        <a href="telaInicial.php"><div class="imagem"><img src="logo_estetica.png" alt="logo" style="width: 200px" style="height: 50px" style="border-radius: 20px"></div></a>
        <a href="buscacliente.php">Busca de Cliente</a> 
        <a href="cadastroproduto.php">Cadastro de Produto</a> 
         <a href="buscaproduto.php">Busca de produto</a> 
        <div class="menu-log"> 
        </div> 
    </div> 
</head>
<!-- Fim do título-->

<!-- Início do corpo do site-->
<body>
    
<form id="cadastro" name="cadastro" method="post" action="cadastro.php" onsubmit="return validaCampo(); return false;" class="login" style="font-size: 100" >
 <table width="500" border="0">

 <h1><center>Cadastro de cliente</center></h1>

 <!--Campo nome-->
 <tr>
 <td width="69">Nome:</td>
 <td width="546"><input name="nome" type="text" id="nome" size="50" maxlength="60" class="name" placeholder="Digite o Nome Completo" />
 </tr>

 <!--E-mail-->
 <tr>
 <td>Email:</td>
 <td><input name="email" type="text" id="email" size="50" maxlength="300" class="email" placeholder="EX: teste@gmail.com" />
 </tr>

 <!--Sexo-->
 <tr>
 <td>Sexo:</td>
 <td><input name="sexo" maxlength="1" placeholder="Digite M ou F para o sexo." type="text"/>
 </tr>

 <!-- Nascimento -->
 <tr>
	<td>Idade:</td><br/>
	<td><input type="text" name="idade" maxlength="2" id="idade" placeholder="EX: 20" /></td>
</tr>

<tr>
 <td>Telefone:</td>
 <td><input name="telefone" type="text" id="telefone" placeholder="Apenas números com DDD" /></td>
</tr>     

<tr>
<td>Celular:</td>
 <td><input name="celular" type="text" id="celular" placeholder="Apenas números com DDD" /></td>
</tr>

     <tr>
 <td>Tratamento realizado:</td>
 <td>
    <input type="text" name="tratamento" class="email" placeholder="Tipo de Tratamento">
</td>
 </tr>

     
<tr>
<td><input type="submit" placeholder="Cadastrar" value="Cadastrar" name="cadastrar" class="cadastro"></td>
</tr>
    </table>
  <style>
  	body{
  		background-image: url(https://wallpapercave.com/wp/wp3219952.jpg);
  	}
    .login{
	width: 600px;
	height: 640px;
	border: 2px solid #000;
	border-radius: 80px 0px 80px 0px;
	color: #fff;
	background-color: rgba(0,0,5,0.8);
	top: 53%;
	left: 50%;
	position: absolute;
	transform: translate(-50%, -50%);
	box-sizing: border-box;
	padding: 50px 50px;
}

.usuario{
	border-radius: 50%;
	position: absolute;
	top: -50px;
	left: 112px;
}

h1{
	margin: 0;
	padding-top: 0;
	padding-left: 0;
	padding-bottom: 20px;
	letter-spacing: 10px;
	text-transform: uppercase;
	text-align: center;
	font-size: 25px;
}

.login p{
	margin: 0;
	padding: 0;
	font-weight: bold;
}

.login input{
	width: 100%;
	margin-bottom: 21px;
}

.login input[type="text"], input[type="password"] {
	border:none;
	border-bottom: 1px solid white;
	background: transparent;
	outline: none;
	height: 40px;
	color: white;
	font-size: 16px;
}

.login input[type="submit"]{
	border: none;
	outline: none;
	height: 35px;
	color: #000;
	background: #fff;
	border-radius: 20px;
	transition: 0.2s;
}

.login input[type="submit"]:hover{
	cursor: pointer;
	background: #ff4d4d;
	transition: 0.2s;
}

.login a{
	font-weight: bold;
	text-decoration: none;
	font-size: 12px;
	line-height: 20px;
	color: #4b4b4b;
	transition: 0.2s;
}

.login a:hover{
	transition: 0.2s;
	color: #ff4d4d;
}

.cadastro {
	text-align: center;
}

p.copyright {
        width: 100%;
        color: white;
        line-height: 10px;
        font-size: 0.7em;
        text-align: right;
        margin-top: 597px;
        margin-left: -20px;
        bottom:0;
}

.title {
    margin: 0;
    text-align: center;
}

.menu {  
    position: sticky; 
    top: -10%; 
    background-color: rgba(0,0,5,0.8); 
    padding:10px 0px 10px 0px;
    color:white; 
    margin: 0 auto; 
    overflow: hidden; 
        } 
.menu a { 
    padding-left: 220px;
    float: left; 
    color: white; 
    text-align: center; 
    padding: 14px 16px; 
    text-decoration: none; 
    font-size: 20px; 
        } 
.menu-log { 
    padding-left: 220px;
    right: auto; 
    float: right;
        } 
    </style>
    </form>


<?php
	if(isset($_POST['nome'])){
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$idade = addslashes($_POST['idade']);
		$sexo = addslashes($_POST['sexo']);
		$telefone = addslashes($_POST['telefone']);
		$celular = addslashes($_POST['celular']);
		$tratamento = addslashes($_POST['tratamento']);

	if (!empty($nome) && !empty($email) && !empty($idade) && !empty($sexo) && !empty($telefone) && !empty($celular) && !empty($tratamento) ) {
		$u->conectar("tcc","localhost","root","");
		if ($u->msgErro == "") {
			# code...
			if($u->cadastrar($nome,$email,$idade,$sexo,$telefone,$celular,$tratamento)){
				echo "Cadastrado com sucesso";
			}
			else{
				echo "usuario ja existe";
			}
		}
		else{
			echo "Erro:".$u->msgErro;
		}
	}
	else{
		echo "preencha todos os campos!";
	}
}
	

?>
</body>
</html>
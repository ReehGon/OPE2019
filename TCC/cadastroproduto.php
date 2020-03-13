<?php 
	require_once 'usuario.php';
	$u = new Usuario;


 	session_start();
 ?>
<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="novo/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
	<title>Cadastro de Produtos</title>
    <div class="menu"> 
        <a href="telaInicial.php"><div class="imagem"><img src="logo_estetica.png" alt="logo" style="width: 200px" style="height: 50px" style="border-radius: 20px"></div></a>
        <a href="Cadastro.php">Cadastro de Cliente</a> 
        <a href="buscacliente.php">Busca de Cliente</a>
         <a href="buscaproduto.php">Busca de produto</a> 
        <div class="menu-log"> 
        </div> 
    </div> 
</head>
<body>
	<form action="" method="post" class="login">
		<div class="titulo">
			<h1><label for="nome">Cadastro de produto</label></h1> <p> </p>
		</div>
        
		<div>
			<label for="nome">Nome do Produto:</label><br/>
			<input type="text" id="nome" name="nome_produto" maxlength=30><p></p>
		</div>
        
		<div>
			<label for="nome">Marca do Produto:</label> <br/>
			<input type="text" id="nome" name="marca" maxlength=30> <p> </p>
		</div>
        
		<div>
			<label for="msg">Descrição do Produto:</label><br/>
			<textarea style="resize: none" id="msg" name="descricao" maxlength=100 rows="10" cols="55.7" placeholder="Escreva aqui uma descrição sobre o produto cadastrado." class="textarea"></textarea> <p> </p><br>
		</div>
        
        <div>
		<label for="msg">Fabricante:</label><br/>
            <input type="text" id="vlr" name="fabricante" maxlength="10" placeholder="Nome do Fabricante.">
        </div>
                
		<div>
		<label for="msg">Valor:</label><br/>
            <input type="text" id="vlr" name="valor" maxlength="10" placeholder="Digite o valor sem vírgula.">
        </div>
        
        
        <div class="submit">
			<button type="submit"> <b> Cadastrar o Produto </b> </button> <br/>
		</div><br/>
        
        
        
        <style>
head{
    border: 20px;
            }
body{
	margin: 0;
	padding: 0;
	background-size: 1550px;
	font-family: "Comfortaa", sans-serif;
	background-image: url(https://wallpapercave.com/wp/wp3219952.jpg);
}

.login{
	width: 500px;
	height: 670px;
	border: 2px solid #000;
	border-radius: 80px 0px 80px 0px;
	color: #fff;
	background-color: rgba(0,0,5,0.8);
	top: 55%;
	left: 50%;
	position: absolute;
	transform: translate(-50%, -50%);
	box-sizing: border-box;
	padding: 20px 20px;
}
.titulo{
    text-align: center;
    margin-bottom: 0px;
    font-family: sans-serif;
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
            
.textarea {
    background:url(img/textarea-background.png) center center no-repeat; /* "Quebra" o padrão de textarea */
    border:1px solid #888; /* "Restaura" o padrão */
    color: white;
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
            
.menu {  
    position: sticky; 
    top: 0; 
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

.title {
    margin: 0;
    text-align: center;
}
            </style>
	</form> 

	<?php
	if(isset($_POST['nome_produto'])){
		$nome_produto = addslashes($_POST['nome_produto']);
		$marca = addslashes($_POST['marca']);
		$descricao = addslashes($_POST['descricao']);
		$fabricante = addslashes($_POST['fabricante']);
		$valor = addslashes($_POST['valor']);

	if (!empty($nome_produto) && !empty($marca) && !empty($descricao) && !empty($fabricante) && !empty($valor) ) {
		$u->conectar("tcc","localhost","root","");
		if ($u->msgErro == "") {
			# code...
			if($u->cadastrar_produto($nome_produto,$marca,$descricao,$fabricante,$valor)){
				echo "Cadastrado com sucesso";
			}
			else{
				echo "produto ja existe";
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
<?php 
	include_once 'conexao.php';
 ?>
<!DOCTYPE html>
<html lang="pt" dir="ltr">

<!--Início do site-->
<head>
	<meta charset="utf-8">
	<title>Buscar cliente</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <div class="menu"> 
        <a href="telaInicial.php"><div class="imagem"><img src="logo_estetica.png" alt="logo" style="width: 200px" style="height: 50px" style="border-radius: 20px"></div></a>
        <a href="Cadastro.php">Cadastro de Cliente</a> 
        <a href="cadastroproduto.php">Cadastro de Produto</a> 
         <a href="buscaproduto.php">Busca de produto</a> 
        <div class="menu-log"> 
        </div> 
    </div> 
</head>
<!-- Fim do título-->

<!-- Início do corpo do site-->
<body>
    
<form id="cadastro" name="cadastro" method="POST" action="" onsubmit="return validaCampo(); return false;" class="login" style="font-size: 100" >
 <table width="500" border="0">

 <h1><center>Buscar Cliente</center></h1>

 <!--Campo nome-->
 <tr>
 <td width="69">Nome:</td>
 <td width="546"><input name="busca" type="text" id="nome" size="50" maxlength="60" placeholder="Digite o nome da cliente" class="name">
 </tr>


     <!-- Telefone celular-->
<tr>
 <td>Celular:</td>
 <td><input name="celular" type="text" id="celular" placeholder="Apenas números com DDD" /></td>
</tr>     

     
<tr>
<td><input type="submit" placeholder="buscar" value="Buscar" name="buscar" class="cadastro"></td>

</tr>

    </table>
    <style>
 body{
 	background-image: url(https://wallpapercave.com/wp/wp3219952.jpg);
 	padding-left: 0px;
 	padding-right: 0px;
  	}
.login{
	width: 600px;
	height: 580px;
	border: 2px solid #000;
	border-radius: 80px 0px 80px 0px;
	color: #fff;
	background-color: rgba(0,0,5,0.8);
	top: 57%;
	left: 23%;
	position: absolute;
	transform: translate(-50%, -50%);
	box-sizing: border-box;
	padding: 50px 50px;
    position: absolute;
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

.loginr{
	width: 600px;
	height: 580px;
	border: 2px solid #000;
	border-radius: 0px 80px 0px 80px;
	color: #fff;
	background-color: rgba(0,0,5,0.8);
	top: 57%;
	left: 77.2%;
	position: absolute;
	transform: translate(-50%, -50%);
	box-sizing: border-box;
	padding: 50px 50px;
        }

.nomer{
    width: 500px;
    height: 45px;
    background: #fff;
      }    
        
.textr{
    color: black;
    text-align: center;
      }
        .emailr{
	border:none;
	border-bottom: 1px solid white;
	background: transparent;
	outline: none;
	height: 40px;
	color: white;
	font-size: 16px;   
        }
        
        .emailr h2{
	border:none;
	border-bottom: 1px solid white;
	background: transparent;
	outline: none;
	height: 40px;
	color: white;
	font-size: 16px;
   
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


        
    </style>
    </form>
    

<?php	
	$username = 'root';
	$password = '';

		$busca = isset($_POST['busca']) ? $_POST['busca'] :'';
		$celular = isset($_POST['celular']) ? $_POST['celular'] :'';

	try{
		$pdo = new PDO('mysql:host=localhost;dbname=tcc', $username, $password);
		
		$stmt = $pdo->query("SELECT * FROM tb_cliente where Nome LIKE '%$busca%' AND Celular LIKE '$celular' LIMIT 1; ");
		$stmt->execute();
		$row = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		foreach($row as $dados){ ?> 
			<div class="loginr">
				<h1>Resultado</h1>
				<div class="emailr"><h2 class="textr">Nome: <?php echo $dados->Nome; ?> </h2> </div> 
				<div class="emailr"><h2 class="textr">Email: <?php echo $dados->email; ?> </h2> </div> 
				<div class="emailr"><h2 class="textr">Idade: <?php echo $dados->Idade; ?> </h2> </div> 
				<div class="emailr"><h2 class="textr">Sexo: <?php echo $dados->Sexo; ?> </h2> </div>
				<div class="emailr"><h2 class="textr">Telefone: <?php echo $dados->Telefone; ?> </h2> </div>
				<div class="emailr"><h2 class="textr">Celular: <?php echo $dados->Celular; ?> </h2> </div>
				<div class="emailr"><h2 class="textr">Tratamento: <?php echo $dados->tratamento; ?> </h2> </div> 				
						
			</div>
				<?php
		}
		
		
		
	}catch(PDOException $e){
		echo 'Error' . $e->getMessage();
	}
	
	
	$pdo = null;

	
?>
    
</body>
</html>
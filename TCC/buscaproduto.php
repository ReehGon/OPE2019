<!DOCTYPE html>
<html lang="pt">


<head>
	<meta charset="utf-8">
	<title>Buscar produto</title>
	<link rel="stylesheet" type="text/css" href="novo/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <div class="menu"> 
    <a href="telaInicial.php"><div class="imagem"><img src="logo_estetica.png" alt="logo" style="width: 200px" style="height: 50px" style="border-radius: 20px"></div></a>
    <a href="Cadastro.php">Cadastro de Cliente</a> 
    <a href="buscacliente.php">Busca de Cliente</a> 
    <a href="cadastro.php">Cadastro de Produto</a>  
    <div class="menu-log"> 
        </div> 
    </div>
</head>


<body>    
<form id="cadastro" name="cadastro" method="post" action="" onsubmit="return validaCampo(); return false;" class="login" style="font-size: 100" >
 <table width="500" border="0">

 <h1><center>Buscar Produto</center></h1>

 <tr>
 <td width="69">Nome:</td>
 <td width="546"><input name="busca" type="text" id="nome" size="50" maxlength="60" placeholder="Digite a marca do produto" class="name">
 </tr>


<tr>
 <td>Marca:</td>
 <td><input name="marca" type="text" id="cod" placeholder="Codigo de barras" /></td>
</tr>     
     
<tr>
<td><input type="submit" value="Cadastrar" name="cadastrar" class="cadastro"></td>
</tr>
    </table>
    <style>
    	    	  	body{
  		background-image: url(https://wallpapercave.com/wp/wp3219952.jpg);
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
		$marca = isset($_POST['marca']) ? $_POST['marca'] :'';

	try{
		$pdo = new PDO('mysql:host=localhost;dbname=tcc', $username, $password);
		
		$stmt = $pdo->query("SELECT * FROM tb_produto where nome_produto LIKE '%$busca%' AND marca LIKE '%$marca%' LIMIT 1; ");
		$stmt->execute();
		$row = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		foreach($row as $dados){ ?> 
			<div class="loginr">
				<h1>Resultado</h1>
				<div class="emailr"><h2 class="textr">Nome: <?php echo $dados->nome_produto; ?> </h2> </div> 
				<div class="emailr"><h2 class="textr">Marca: <?php echo $dados->marca; ?> </h2> </div> 
				<div class="emailr"><h2 class="textr">Descrição: <?php echo $dados->descricao; ?> </h2> </div> 
				<div class="emailr"><h2 class="textr">Fabricante: <?php echo $dados->fabricante; ?> </h2> </div>
				<div class="emailr"><h2 class="textr">Valor: <?php echo $dados->valor; ?> </h2> </div>
			
						
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
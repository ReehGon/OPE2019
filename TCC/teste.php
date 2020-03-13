<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="busca" placeholder="Digite o nome do medicamento desejado.">
		<input type="text" name="marca">
		<br>
		<input type="submit" name="Buscar" value="Buscar">
		
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

				<div class="emailr"><h2 class="textr"> <?php echo $dados->nome_produto; ?> </h2> </div> 
				<div class="emailr"><h2 class="textr"> <?php echo $dados->marca; ?> </h2> </div> 
				<div class="emailr"><h2 class="textr"> <?php echo $dados->descricao; ?> </h2> </div> 
				<div class="emailr"><h2 class="textr"> <?php echo $dados->fabricante; ?> </h2> </div>
				<div class="emailr"><h2 class="textr"> <?php echo $dados->valor; ?> </h2> </div>
			
						
			</div>
				<?php
		}
		
		
		
	}catch(PDOException $e){
		echo 'Error' . $e->getMessage();
	}
	
	
	$pdo = null;

	
?>
<style type="text/css">
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


</style>
</body>
</html>
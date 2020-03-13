<?php
session_start();
    if (!isset($_SESSION['id_usuario'])) {
        header("location: TelaLogin.php");
        exit;
    }
?>

<!DOCTYPE html> 
<html lang="pt"> 
<head>
    <!-- tipo e estilo referenciado para background-->
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <!-- referencia do link para tipo da letra -->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title>Página Inicial</title> 
    <style type="text/css">
        div{
            margin-right: 50px;
            margin-left: 50px;
    
        }
        .class-agenda-link{
            text-align: center;
            font-family: Microsoft YaHei UI;
            margin-top: 20px;           
        }
        .class_link_titulo{
            text-decoration: none;
            text-shadow: #000 3px 5px 2px;
            color: #FFF;
        }
    </style>
</head> 

    <!-- Início do corpo do site -->
<body> 
    <div class="menu"> 
        <a href="telaInicial.php"><div class="imagem"><img src="logo_estetica.png" alt="logo" style="width: 200px" style="height: 50px" style="border-radius: 20px"></div></a>
        <a href="Cadastro.php">Cadastro de Cliente</a> 
        <a href="buscacliente.php">Busca de Cliente</a> 
        <a href="cadastroproduto.php">Cadastro de Produto</a> 
         <a href="buscaproduto.php">Busca de produto</a> 
        <div class="menu-log"> 
        </div> 
    <div class = "body_sec"> 
        <section id="Content"> 
        </section> 
        </div>
    </div>
    <td>
    

    <h1 class="class-agenda-link"><a href="https://calendar.google.com/calendar/r?tab=wc&pli=1" class="class_link_titulo">Atualizar Agenda</a></h1>

    </head>
    <body >


    <div><iframe width="100%" height="570px" frameborder="0" scrolling="no" src="https://calendar.google.com/calendar/embed?src=ope1estetica%40gmail.com&ctz=America%2FSao_Paulo"></iframe></div>

    <h class="class-agenda-texto-random"><iframe width="100%" frameborder="0" scrolling="no" src="iframe_detalhe.html"></iframe></h2>
        <style>
        header {
            padding: 0px 10px 10px 10px;
            border: 20px;
        }
        
        body { 
            padding-top: 20px;
            margin-top: 200px;
            margin: 0 auto; 
            background-image: url(https://wallpapercave.com/wp/wp3219952.jpg);
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
        footer { 
            width: 100%; 
            bottom: 0px; 
            background-color: #000; 
            color: #fff; 
            position: absolute; 
            padding-top:20px; 
            padding-bottom:50px; 
            text-align:center; 
            font-size:30px; 
            font-weight:bold; 
        } 
        .body_sec { 
            margin-left:20px; 

    </style>
</body> 
</html>
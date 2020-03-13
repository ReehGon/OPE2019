<?php

class Usuario{
	private $pdo;
	public $msgErro = "";

	public function conectar($nome, $host, $usuario, $senha){
		global $pdo;
		global $msgErro;
		try {
			$pdo = new PDO("mysql:dbname=".$nome.";host=".$host, $usuario, $senha);
			#echo "foi";
		} catch (Exception $e) {
			$msgErro = $e->getMessage();
		}
	}

	public function cadastrar($nome,$email,$idade,$sexo,$telefone,$celular,$tratamento){
		global $pdo;

		$sql = $pdo->prepare("SELECT idCliente FROM tb_cliente WHERE Nome = :n AND Celular = :c");
		$sql->bindValue(":n",$nome);
		$sql->bindValue(":c",$celular);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			return false; //usuario ja esta cadastrado
		}
		else{
			//caso nao, cadastrando aqui
			$sql = $pdo->prepare("INSERT INTO tb_cliente (nome, email, idade, sexo, telefone, celular, tratamento) VALUES (:n, :e, :i, :s, :t, :c , :r) ");
			$sql->bindValue(":n",$nome);
			$sql->bindValue(":e",$email);
			$sql->bindValue(":i",$idade);
			$sql->bindValue(":s",$sexo);
			$sql->bindValue(":t",$telefone);
			$sql->bindValue(":c",$celular);
			$sql->bindValue(":r",$tratamento);
			$sql->execute();
			return true;
		}
	}

	public function logar($login,$senha){
		global $pdo;

		$sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE Login = :l AND Senha = :s");
		$sql->bindValue(":l",$login);
		$sql->bindValue(":s",$senha);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			# code...
			//entrou 
			$dado = $sql->fetch();
			session_start();
			$_SESSION['id_usuario'] = $dado['id_usuario'];
			return true; //logado com sucesso
		}
		else{
			return false;// nao foi possvel logar
		}
	}

	public function cadastrar_produto($nome_produto,$marca,$descricao,$fabricante,$valor){
		global $pdo;

		$sql = $pdo->prepare("SELECT id_produto FROM tb_produto WHERE nome_produto = :n AND marca = :m");
		$sql->bindValue(":n",$nome_produto);
		$sql->bindValue(":m",$marca);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			return false; //usuario ja esta cadastrado
		}
		else{
			//caso nao, cadastrando aqui
			$sql = $pdo->prepare("INSERT INTO tb_produto (nome_produto, marca, descricao, fabricante, valor) VALUES (:n, :m, :d, :f, :v) ");
			$sql->bindValue(":n",$nome_produto);
			$sql->bindValue(":m",$marca);
			$sql->bindValue(":d",$descricao);
			$sql->bindValue(":f",$fabricante);
			$sql->bindValue(":v",$valor);
			$sql->execute();
			return true;
		}
	}

}

?>
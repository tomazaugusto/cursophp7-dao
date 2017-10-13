<?php
	require_once("config.php");

	/*
	$sql = new Sql();
	$usuarios = $sql->select("SELECT * FROM tb_usuarios");
	echo json_encode($usuarios);
	*/

	
	//Carrega (traz) um usuário
	//$jose = new Usuario();
	//$jose->loadById(1);
	//echo $jose;

	
	//Carrega uma lista de usuários
	//$lista = Usuario::getList();
	//echo json_encode($lista);
	
	
	//Carrega uma lista de usuários buscando pelo login
	//$search = Usuario::search("jo");
	//echo json_encode($search);
	

	//Carrega um usuário usando o login e a senha
	//$usuario = new Usuario();
	//$usuario->login("jose", "1234567890"); 
	//echo $usuario;
	

	//Criando um novo usuário
	//$aluno = new Usuario("aluno", "@lun0");
	//$aluno->insert();
	//echo $aluno;
	

	$usuario = new Usuario();
	$usuario->loadById(5);
	$usuario->update("professor", "!@#$%¨&");
	echo $usuario;
?> 
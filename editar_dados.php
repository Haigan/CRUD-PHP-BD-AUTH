<?php
require_once("conexao.php");

if(isset($_POST['codigo']))
	$codigo = $_POST['codigo'];

if(isset($_POST['nome']))
	$nome = $_POST['nome'];

if(isset($_POST['email']))
	$email = $_POST['email'];

if(isset($_POST['senha']))
	if(!empty($_POST['senha']))
		$senha = sha1($_POST['senha']);
	else
		$senha = "";

if(!empty($senha)){
	$consulta = $conexao->prepare("UPDATE usuario SET nome = ?, email = ?, senha = ? WHERE codigo = ?");
	$consulta->bind_param("sssd", $nome, $email, $senha, $codigo);
}else{
	$consulta = $conexao->prepare("UPDATE usuario SET nome = ?, email = ? WHERE codigo = ?");
	$consulta->bind_param("ssd", $nome, $email, $codigo);	
}
$consulta->execute();




?>
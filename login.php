<?php
require_once('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, sha1($_POST['senha']));

$query = "select nome from usuario where email = '{$email}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);



if($row == 1) {
	session_start();
	$_SESSION['logado'] = 1;
	header('Location: painel.php');
	exit();
} else {
	header('Location: erro.php');
	exit();
}
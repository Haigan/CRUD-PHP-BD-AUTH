<?php

session_start();

require_once("conexao.php");

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, sha1($_POST['senha']));
$ativo = 1;


$sql = "select count(*) as total from usuario where email = '$email'";

$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);


if($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('Location: erro_existe.php');
    exit;
}



$sql = "INSERT INTO usuario (nome, email, senha, ativo) VALUES ('$nome','$email','$senha','$ativo')";

if($conexao->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
    header('Location: sucesso_cadastro.php');
    exit;
}

$conexao->close();

header('Location: cadastro.php');
exit;

?>
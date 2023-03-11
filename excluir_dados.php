<?php
require_once("conexao.php");

if(isset($_POST['codigo'])){
	$codigo = (int)$_POST['codigo'];
	
	$sql = "DELETE FROM usuario WHERE codigo = {$codigo}";
	
	$conexao->query($sql);
	
	echo "Registro excluído com sucesso.";	
}

?>
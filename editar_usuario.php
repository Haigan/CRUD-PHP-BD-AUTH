<?php
require_once("conexao.php");

$id = $_GET['id'];
$sql = "SELECT codigo, nome, email FROM usuario
 WHERE codigo = {$id}";
 
$consulta = $conexao->query($sql);
$linha = mysqli_fetch_array($consulta);

?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Edição de usuário</title>
		<meta charset="UTF-8"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<link rel="stylesheet" href="css/styleEditarUsuario.css">

	<style>

.btn-link{
    width: 100%;
    padding: 16px 0px;
    margin: 8px;
    border: none;
    border-radius: 8px;
    text-transform: uppercase;
    font-weight: 800;
    letter-spacing: 3px;
	text-align: center;
    color: #2b134b;
    background: #00ff88;
    cursor: pointer;
    box-shadow: 0px 10px 40px -12px #00ff8052;
    text-decoration: none;
}



	</style>


	</head>
	<body>

		<div class="main-login">
		
		<form action="editar_dados.php" name="frmCadastro" id="frmCadastro">
			<div class="right-login">
				<div class="card-login">
					<h1>Edição Usuário</h1>
					<div class="textfield">
						<input type="hidden" name="codigo" value="<?php echo $linha['codigo']; ?>">
						<label>Código: <?php echo $linha['codigo']; ?></label> 
						
					</div>
					<div class="textfield">
						<label>Nome: </label>
						<input type="text" name="nome" value="<?php echo $linha['nome']; ?>" required>
					</div>
					<div class="textfield">	
						<label>E-mail: </label>
						<input type="email" name="email" value="<?php echo $linha['email']; ?>" required>
					</div>
					<div class="textfield">
						<label>Senha: </label>
						<input type="password" id="senha" name="senha">
					</div>

					<button class="btn-login" type="submit" id="cadastrar" value="editar">Editar</button>
					<a href="painel.php" class="btn-link">Voltar</a>
				</div>

			</div>

			
			
		
			
			
			
		</form>
		<br/>
		<div id="simple-msg" ></div>

		</div>



		
        
		
		<script>
			$(function(){	
				$("#cadastrar").click(function(){
					$("#frmCadastro").submit(function(e)
					{	
						var postData = $(this).serializeArray();
						var formURL = $(this).attr("action");
						$.ajax(
						{
							url : formURL,
							type: "POST",
							data : postData,
							success:function(data, textStatus, jqXHR) 
							{
								$("#simple-msg").html(data);
								$("#senha").val("");	
								
							},
							error: function(jqXHR, textStatus, errorThrown) 
							{	
								var error = textStatus + '<br/>' +errorThrown;
								$("#simple-msg").html(error);
						
							}
						});
						e.preventDefault();	
						e.unbind();
					});
					
				});
				
			});

		</script>
	</body>
</html>
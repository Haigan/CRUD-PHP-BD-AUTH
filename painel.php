<?php
require_once('verifica.php')
?>

<?php
require_once("conexao.php");
$sql = "SELECT codigo, nome, email FROM usuario";
$consulta = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Painel de usuários</title>
		<meta charset="UTF-8"/>
		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
		<link rel="stylesheet" href="css/StyleTabela.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" type="text/css"/>
        <script>
		function confirma(id){
			var ok = confirm("Deseja realmente excluir este registro?");
			if(ok){				
				$.post("excluir_dados.php", {codigo:id}, function(result){
					alert(result);
					location.reload();
				});
				
			}else{
				return false;
			}
		}
		</script>
	</head>
	
	<body>	

		<div class="main-login">

			<div class="right-login">

				<div class="card-login">

					<table id="usuarios" class="display" style="width:100%">
						<h1>PAINEL</h1>
						<thead>
						<tr>
							<th>Código</th>
							<th>Nome</th>
							<th>E-mail</th>
							<th>Editar</th>
							<th>Excluir</th>
							
						</tr>
						</thead>

						<tbody>
						<?php
						while($linha = mysqli_fetch_array($consulta)){
							echo "<tr>";
							echo "<td>".$linha['codigo']."</td>";
							echo "<td>".$linha['nome']."</td>";
							echo "<td>".$linha['email']."</td>";
							echo "<td><button><a href='editar_usuario.php?id={$linha['codigo']}'>Editar</a></button></td>";
							echo "<td><button id='b2'><a href='javascript:confirma({$linha['codigo']});'>Excluir</a></button></td>";
							echo "</tr>";
						}
						?>
						</tbody>

						<tfoot>
						<tr>
							<th>Código</th>
							<th>Nome</th>
							<th>E-mail</th>
							<th>Editar</th>
							<th>Excluir</th>
						</tr>
						</tfoot>
							
				    </table>
					<h1><a class="cads" href="logout.php">Sair</a></h1>

					
				</div>

			</div>

		</div>
		


			
		
		<script>
			$(document).ready(function () {
				$('#usuarios').DataTable({
					"language": {
						"url": "//cdn.datatables.net/plug-ins/1.12.1/i18n/pt-BR.json"
					}
										
				});
			});		
		</script>
	</body>
</html>

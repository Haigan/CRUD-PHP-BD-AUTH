<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1> Faça login<br> E acesse nosso painel</h1>
            <img src="/images/formulario.svg" class="left-login-image">
        </div>

    <form action="login.php" method="POST">
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                
                    <div class="textfield">
                        <label for="usuario">Email</label>
                        <input type="text" name="email" placeholder="email">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="senha">
                    </div>
                 
                    <button class="btn-login" type="submit" value="entrar">Entrar</button>
                    <p>Não tem uma conta? <a class="cads" href="cadastro.php"> clique aqui</a> </p>
                 
            </div>
        </div>
    </form>

    </div>




    
    <?php
		if(isset($_GET['erro'])){
			if($_GET['erro'] == 'autentica'){
				$msg = "Usuário e/ou senha incorretos.";
			}
			elseif ($_GET['erro'] == 'acesso_negado'){
				$msg = "Acesso negado!";    
			}
            echo $msg;

            echo "<script>";
			echo "alert('".$msg."');";				
			echo "</script>";
			
		}
		?>

    

    
</body>
</html>
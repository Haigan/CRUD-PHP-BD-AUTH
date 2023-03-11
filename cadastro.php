<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro</title>
</head>
<body>

    <div class="main-login">
        <form action="cadastrar.php" method="POST">
            <div class="right-login">
                <div class="card-login">
                    <h1>CADASTRO</h1>

                        <div class="textfield">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" placeholder="nome">
                        </div>
                        <div class="textfield">
                            <label for="usuario">Email</label>
                            <input type="text" name="email" placeholder="email">
                        </div>
                        <div class="textfield">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" placeholder="senha">
                        </div>
                    
                        <button class="btn-login" type="submit" value="entrar">Cadastrar</button>
                        <p>Cadastro efetuado? <a class="cads" href="index.php"> Clique aqui</a> </p>
                   
                        
                    
                </div>
            </div>
        </form>
       

    </div>

   

    
</body>
</html>
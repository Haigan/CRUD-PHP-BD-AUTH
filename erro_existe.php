<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario ja existe erro</title>
</head>
<style>
    body{
        background: #2f2841;
    }
    h1{
        text-transform: uppercase;
        display: flex;
        text-align: center;
        justify-content: center;
        color: #77ffc0;
        padding-top: 400px;
    }
</style>
<body>
    <h1>Usuário já existe!</h1>
    <script>

        setTimeout(()=>{
            window.location.replace("cadastro.php");
        },2000);



    </script>
</body>
</html>
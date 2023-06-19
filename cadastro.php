<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: white;
        }
        .login{
            position: absolute;
            width: 630px;
            height: 307px;
            left: 600px;
            bottom: 200px;

            background: #02193C;
            border-radius: 30px;
        }
        .imagem{
            background-color: #02193C;
            position: absolute;
            width: 2000px;
            height: 250px;
            top: 0px;
            left: 0px;
        }
        .cabecalho{
            background-color: #02193C;
            position: absolute;
            width: 2000px;
            height: 50px;
            left: 0px;
            top: 250px;
        }
        h1{
            text-align: center;
            color: white;
        }
        h2{
            color: white;
        }
        label{
            color:white
        }
        img{
            width: 2000px;
            height: 250px;
        }
        
    </style>
    <title>Login</title>
</head>
<body>
    <div class="imagem">
        <a href=""><img src="imagens/faculdade-em-radiologia.jpg" alt=""></a>
        
    </div>
    <div class="cabecalho">

    </div>
<center>
<div class= "login">
    <h2>CADASTRO DO PROFISSIONAL</h2>
    <form action="" method="POST">
        <p>
        <label for="">Nome:</label>
        <input type="text" name="email">
        </p>
        <p>
        <label for="">CPF:</label>
        <input type="password" name="senha">
        </p>
        <p>
        <label for="">E-mail:</label>
        <input type="text" name="email">
        </p>
        <p>
        <label for="">Senha:</label>
        <input type="password" name="senha">
        </p>
        <p>
        <label for="">CRM/Certificado de conclusão:</label>
        <input type="password" name="senha">
        </p>
        <p>
            <button type="submit"><a href="painel.php">cadastrar</a></button>
            <button type="submit"><a href="index.php">voltar</a></button>
        </p>
    </form>
    </div>
    </center>
</body>
</html>
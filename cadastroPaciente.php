<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            width: 1900px;
            height: 50px;
            left: 0px;
            top: 250px;
            text-align: center;
        }
        .rodape{
            background-color: #02193C;
            position: absolute;
            width: 2000px;
            height: 50px;
            left: 0px;
            bottom: 0px;
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
            width: 1900px;
            height: 250px;
        }
        
    </style>
    <title>Login</title>
</head>
<body>
    <div class="imagem">
        <a href=""><img src="imagens/fundo.png" alt=""></a>
    </div>
    <div class="cabecalho">
        
        <a href="painel.php" style="color:white">home</a>
        <a href="cadastroPaciente.php" style="color:white">cadastro de paciente</a>
        <a href="cadastroExame.php" style="color:white">cadastro de exame</a>
        <a href="pesquisar.php" style="color:white">pesquisar</a>
        
    </div>
<center>
<div class= "login">
    <h2>CADASTRO DO PACIENTE</h2>
    <form action="" method="POST">
        <p>
        <label for="">Nome:</label>
        <input type="text" name="email">
        </p>
        <p>
        <label for="">CPF:</label>
        <input type="text" name="senha">
        </p>
        <p>
        <label for="">E-mail:</label>
        <input type="text" name="email">
        </p>
        <p>
        <label for="">Sexo:</label>
        <input type="text" name="senha">
        </p>
        <p>
        <label for="">Carteirinha do plano(caso houver):</label>
        <input type="text" name="senha">
        </p>
        <p>
            <button type="submit"><a href="painel.php">cadastrar</a></button>
            <button type="submit"><a href="painel.php">voltar</a></button>
        </p>
    </form>
    </div>
    </center>
    <div class="rodape">

</div>
</body>
</html>
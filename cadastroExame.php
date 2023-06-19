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
            width: 1030px;
            height: 507px;
            left: 450px;
            bottom: 80px;

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
        .exame{
            background-color: white;
            width: 630px;
            height: 230px;
            border-radius: 30px;
        }
        h1{
            text-align: center;
            color: white;
        }
        h2{
            color: white;
        }
        label{
            color:white;
            left: 300px;
            
        }
        img{
            width: 1900px;
            height: 250px;
        }
        input{
            left: 1300px;
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
    <h2>CADASTRO DO EXAME</h2>
    <form action="" method="POST">
        <p>
        <label for="">Médico solicitante:</label>
        <input type="text" name="email">
        </p>
        <p>
        <label for="">Médico laudante:</label>
        <input type="text" name="senha">
        </p>
        <p>
        <label for="">Paciente:</label>
        <input type="text" name="email">
        </p>
        <p>
        <label for="">Código:</label>
        <input type="text" name="senha">
        </p>
        <div class="exame">

        </div>
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
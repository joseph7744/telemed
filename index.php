<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])){

    if(strlen($_POST['email']) == 0){
        echo "Preencha seu e-mail";
    }else if(strlen($_POST['senha']) == 0){
        echo "Preencha sua senha";
    }else{

        $email = $mysqli -> real_escape_string($_POST['email']);
        $senha = $mysqli -> real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli -> query($sql_code) or die("Falha na execução do código SQL: " . $mysqli-> error);

        $quantidade = $sql_query -> num_rows;

        if($quantidade == 1) {

            $usuario = $sql_query -> fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }
            
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        }else{
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
    }
}
?>

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
            height: 207px;
            left: 600px;
            bottom: 300px;

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

    </div>
<center>
<div class= "login">
    <h2>Acesse sua conta</h2>
    <form action="" method="POST">
        <p>
        <label for="">E-mail</label>
        <input type="text" name="email">
        </p>
        <p>
        <label for="">Senha</label>
        <input type="password" name="senha">
        </p>
        <p>
            <button type="submit">Entrar</button>
            <button type="submit"><a href="cadastro.php">cadastrar</a></button>
        </p>

    </form>
    </div>
    </center>
    <div class="rodape">

</div>
</body>
</html>
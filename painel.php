<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .imagem{
            background-color: #02193C;
            position: absolute;
            width: 1850px;
            height: 550px;
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
        body{
            background-color: white;
        }
        .exames{
            background-color: white;
            position: absolute;
            width: 1900px;
            height: 507px;
            left: 0px;
            bottom: 19px;
            padding: 30px;
            margin-bottom: 30px;

        }
        h1{
            text-align: center;
            color: #042940;
        }
        h2{
            color: #042940;
        }
        img{
            width: 1900px;
            height: 250px;
        }
    </style>
    <title>Painel</title>
</head>
<body>
    <div class="imagem">
        <a href=""><img src="imagens/fundo.png" alt=""></a>
    </div>
    <div class="cabecalho" >
        
        <a href="painel.php" style="color:white">home</a>
        <a href="cadastroPaciente.php" style="color:white">cadastro de paciente</a>
        <a href="cadastroExame.php" style="color:white">cadastro de exame</a>
        <a href="pesquisar.php" style="color:white">pesquisar</a>
        
    </div>


    <center>
    <div class="exames">
    <table style="text-align: center;">
        <thead><tr><th>Paciente</th><th>Data </th><th>Tipo de exame</th><th>Exame</th></tr></thead>
        <tbody>
            <tr><td>Jose Matheus Andrade dos Anjos</td><td>04/01/2023</td><td>RX coluna</td><td><a href="imagem1.php">Visualizar imagem</a></td></tr>
            <tr><td>Jean Oliveira da Silva</td> <td>04/01/2023</td><td>TC abdomen</td><td><a href="imagem2.php">Visualizar imagem</a></td></tr>
            <tr><td>André Felipe Sindeaux Sindeaux</td> <td>03/01/2023</td><td>US abdominal</td><td><a href="imagem3.php">Visualizar imagem</a></td></tr>
        </tbody>
    </table>
    <p>
        <a href="logout.php" style="color:black">Sair</a>
    </p>
    </div>
    </center>
    
    <div class="rodape">

    </div>
</body>
</html>
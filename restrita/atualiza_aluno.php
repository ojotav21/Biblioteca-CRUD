<?php

include '../conecta.php'; // Incluindo o Banco
    $ra = $_GET['ra'];
    // echo $ra;

    $nome =  $_POST['nome'];  //Campos do FORMS = name do form
    $email = $_POST['email'];
    $dataNasc = $_POST['nascimento'];
    $telfixo = $_POST['celular'];
    $telcel = $_POST['telefone'];
 
    // echo "$email <br>";
    // echo "$nome <br>";
    // echo "$telcel <br>";
    // echo "$telfixo <br> ";
    // echo "$dataNasc <br> ";

    $consulta = $conexao -> prepare("UPDATE aluno 
    SET nome = '$nome',
    email = '$email',
    dataNasc = '$dataNasc',
    telfixo = '$telfixo',
    telcel = '$telcel'
     WHERE ra ='$ra'");
    
    $consulta -> execute();     
    
    header('Location: index.php')
?>
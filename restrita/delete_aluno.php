<?php

include '../conecta.php'; // Incluindo o Banco
    $ra = $_GET['ra'];
    // echo $ra;


 
    // echo "$email <br>";
    // echo "$nome <br>";
    // echo "$telcel <br>";
    // echo "$telfixo <br> ";
    // echo "$dataNasc <br> ";

    $consulta = $conexao -> prepare("DELETE FROM aluno 
     WHERE ra ='$ra'");
    
    $consulta -> execute();     
    
    header('Location: index.php');
?>
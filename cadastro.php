<?php
    include("conexao.php");

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $repitasenha = $_POST['repitasenha'];

    $sql="INSERT INTO cadastro(nome, cpf, senha, repitasenha) 
            VALUES ('$nome', '$cpf', '$senha', '$repitasenha')";

    if(mysqli_query($conexao, $sql)) {
        echo "Usuário cadastrado com sucesso";
    }    
    else{
        echo "Erro" .mysqli_connect_error($conexao);
    }   
    mysqli_close($conexao); 
?>  


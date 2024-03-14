<?php

include_once('conexao.php');

if(isset($_POST['enviado'])){
    // Recupera dados do formulário
    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $idade = $_REQUEST['idade'];

    global $conn;
    
    $sql = "INSERT INTO cadastro (nome, email, idade) VALUES ('$nome', '$email', '$idade')";

    $result = $conn->query($sql);

   if($result == TRUE){
    echo "Olá " . $nome . ", Bem vindo!";
   }else{
    echo "Falha.";
   }

   $conn->close();
}




?>
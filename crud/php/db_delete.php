<?php

include_once('conexao.php');

if(isset($_POST['excluir'])){
    // Recupera dados do formulário
    $id = $_POST['id'];

    global $conn;
    
    $sql = "DELETE FROM cadastro WHERE id = '$id'";

    $result = $conn->query($sql);

   if($result == TRUE){
    echo "usuario excluido.";
   }else{
    echo "Falha.";
   }

   $conn->close();
}





?>
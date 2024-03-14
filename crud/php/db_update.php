<?php

include_once('conexao.php');

if(isset($_POST['atualizar'])){
    $id = $_POST['id'];

    global $conn;

    $sql = "UPDATE cadastro SET nome='$nome', email='$email', idade='$idade'";

    if (mysqli_query($coat, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($coat);
    }

    mysqli_close($coat);

}


?>
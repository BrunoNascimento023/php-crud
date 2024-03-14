<?php

// Variáveis de conexão
$host = 'localhost'; 
$username = 'root'; // Nome de usuário do banco de dados
$password = ''; // Senha do banco de dados
$database = 'CRUD_exerc'; // Nome do banco de dados


// Conexão com o banco de dados
$conn = mysqli_connect($host, $username, $password, $database);

// Verifica se ocorreu algum erro na conexão
if (!$conn) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}else{
    // echo "Conectado.";
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários Cadastrados</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Usuários Cadastrados</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Idade</th>
            <th>Ação</th>
        </tr>
        <?php
        include('./php/db_cadastro.php');
        // Consulta SQL para selecionar todos os usuários cadastrados
        $sql = "SELECT * FROM cadastro";

        // Executa a consulta SQL
        $result = $conn->query($sql);
        // Verifica se há registros retornados pela consulta
        if ($result->num_rows > 0) {
            // Loop através dos resultados e exibe cada usuário em uma linha da tabela
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nome"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["idade"] . "</td>";
                echo "<td><form action='./php/db_delete.php' method='post'>
                <input type='hidden' name='id' value='" . $row["id"] . "'>
                <button type='submit' name='excluir'>Excluir</button>
                 </form>
                 </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Nenhum usuário cadastrado</td></tr>";
        }
        ?>
    </table>
</body>
</html>
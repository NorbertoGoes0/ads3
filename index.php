<!DOCTYPE html>
<html>
<head>
    <title>CRUD Aluno</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Lista de Alunos</h2>
        <a href="create.php" class="btn btn-primary">Adicionar Aluno</a>
        <br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Conexão com o banco de dados
                $conn = mysqli_connect('localhost', 'usuario', 'senha', 'nome_do_banco');

                // Verifica a conexão
                if (!$conn) {
                    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
                }

                // Consulta os alunos
                $query = "SELECT * FROM aluno";
                $result = mysqli_query($conn, $query);

                // Exibe os alunos na tabela
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>" . $row['sobrenome'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>";
                    echo "<a href='edit.php?id=" . $row['id'] . "' class='btn btn-primary'>Editar</a> ";
                    echo "<a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Excluir</a>";
                    echo "</td>";
                    echo "</tr>";
                }

                // Fecha a conexão
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
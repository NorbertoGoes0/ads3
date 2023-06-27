<?php

require_once '../model/Aluno.php';

class AlunoService {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function create($nome, $sobrenome, $email) {
        $query = "INSERT INTO aluno (nome, sobrenome, email) VALUES ('$nome', '$sobrenome', '$email')";
        return mysqli_query($this->conn, $query);
    }

    public function update($id, $nome, $sobrenome, $email) {
        $query = "UPDATE aluno SET nome = '$nome', sobrenome = '$sobrenome', email = '$email' WHERE id = $id";
        return mysqli_query($this->conn, $query);
    }

    public function delete($id) {
        $query = "DELETE FROM aluno WHERE id = $id";
        return mysqli_query($this->conn, $query);
    }

    public function getAll() {
        $alunos = array();

        $query = "SELECT * FROM aluno";
        $result = mysqli_query($this->conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $aluno = new Aluno();
            $aluno->id = $row['id'];
            $aluno->nome = $row['nome'];
            $aluno->sobrenome = $row['sobrenome'];
            $aluno->email = $row['email'];

            $alunos[] = $aluno;
        }

        return $alunos;
    }
}

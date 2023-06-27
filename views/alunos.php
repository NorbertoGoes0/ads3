<?php include_once "../models/AlunoModel.php"; ?>

<?php include_once "header.php"; ?>

<div class="container">
  <div class="table-container <?php echo isset($_COOKIE['theme']) && $_COOKIE['theme'] === 'dark' ? 'table-container-dark' : ''; ?>">
    <h2 class="text-center <?php echo isset($_COOKIE['theme']) && $_COOKIE['theme'] === 'dark' ? 'text-light' : ''; ?>">Alunos</h2>

    <a class="btn btn-primary mb-3" href="adicionar_aluno.php">Adicionar Aluno</a>

    <?php
    $alunoModel = new AlunoModel();
    $alunos = $alunoModel->listarAlunos();
    ?>

    <table class="table <?php echo isset($_COOKIE['theme']) && $_COOKIE['theme'] === 'dark' ? 'table-dark' : ''; ?>">
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
        <?php foreach ($alunos as $aluno) { ?>
          <tr>
            <td><?php echo $aluno['id']; ?></td>
            <td><?php echo $aluno['nome']; ?></td>
            <td><?php echo $aluno['sobrenome']; ?></td>
            <td><?php echo $aluno['email']; ?></td>
            <td>
              <a class="btn btn-sm btn-primary" href="editar_aluno.php?id=<?php echo $aluno['id']; ?>">Editar</a>
              <a class="btn btn-sm btn-danger" href="../controllers/AlunoController.php?acao=excluir&id=<?php echo $aluno['id']; ?>">Excluir</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

<?php include_once "footer.php"; ?>

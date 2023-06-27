<?php include_once "../models/AlunoModel.php"; ?>

<?php include_once "header.php"; ?>

<div class="container">
  <div class="form-container">
    <h2 class="text-center">Adicionar Aluno</h2>

    <form method="post" action="../controllers/AlunoController.php?acao=inserir">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
      </div>
      <div class="form-group">
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" class="form-control" id="sobrenome" name="sobrenome" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
  </div>
</div>

<?php include_once "footer.php"; ?>

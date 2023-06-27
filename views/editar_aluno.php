<?php include_once "../models/AlunoModel.php"; ?>

<?php include_once "header.php"; ?>

<?php
$alunoModel = new AlunoModel();
$aluno = $alunoModel->buscarAluno($_GET['id']);
?>

<h2>Editar Aluno</h2>

<form method="post" action="../controllers/AlunoController.php?acao=atualizar">
    <input type="hidden" name="id" value="<?php echo $aluno['id']; ?>">
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $aluno['nome']; ?>" required>
    </div>
    <div class="form-group">
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" class="form-control" id="sobrenome" name="sobrenome" value="<?php echo $aluno['sobrenome']; ?>" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $aluno['email']; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>

<?php include_once "footer.php"; ?>

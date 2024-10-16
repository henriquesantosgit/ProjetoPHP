<?php 
require 'FolhaPagamento.php';

$folhaPagamento = new FolhaPagamento();

// Adiciona um novo funcionário quando o formulário for enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $folhaPagamento->addFuncionarios();
}

$funcionarios = $folhaPagamento->listarFuncionarios();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Folha de Pagamentos</title>
</head>
<body>
    <h1>Cadastro de Funcionários</h1>
    <form action="#" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" required>
        <label for="salario">Salário:</label>
        <input type="number" name="salario" required>
        <label for="cargo">Cargo:</label>
        <input type="text" name="cargo" required>
        <label for="horasT">Horas Trabalhadas:</label>
        <input type="number" name="horasT" required>
        <input type="submit" value="Adicionar">
    </form>

    <div class="info">
        <h2>Funcionários Cadastrados:</h2>
        <ul>
            <?php if (!empty($funcionarios)): ?>
                <?php foreach ($funcionarios as $func): ?>
                    <li>
                       Código: <?= $func['codigo'] ?> Nome: <?= $func['nome'] ?> | Cargo: <?= $func['cargo'] ?> | Salário: R$ <?= $func['salario'] ?> | Horas Trabalhadas: <?= $func['horasT'] ?>
                    </li>
                <?php endforeach; ?>
            <?php else: ?>
                <li>Nenhum funcionário cadastrado.</li>
            <?php endif; ?>
        </ul>
    </div>
</body>
</html>

<?php 
include "Funcionario.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Pagamentos</title>
</head>
<body>
    <form action="#" method="post">
    <label for="codigo">Código: </label>
    <input type="number" name="codigo">
    <label for="nome">Nome: </label>
    <input type="text" name="nome">
    <label for="salario">Salário:</label>
    <input type="number" name="salario">
    <label for="cargo">Cargo:</label>
    <input type="text" name="cargo">
    <label for="horasT">Horas Trabalhadas:</label>
    <input type="number" name="horasT">
    <input type="submit" value="Adicionar">
    </form>
</body>
<div class="info">
    <h2>Funcionários:</h2>
    <br>
    <h4>
        <?php
    // $funcionario1 = new Funcionario(1, "João", 1000, "Gerente", 200); 
    // echo $funcionario1->apresentar();
    // echo $funcionario1->calcularSalario();
    ?>
    </h4>
</div>
</html>
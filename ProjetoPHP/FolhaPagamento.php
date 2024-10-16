<?php
require 'conexao.php';
require 'Funcionario.php';

class FolhaPagamento {
    // Método para adicionar funcionário no banco de dados
    public function addFuncionarios() {
        $nome = $_POST['nome'];
        $salario = $_POST['salario'];
        $cargo = $_POST['cargo'];
        $horasT = $_POST['horasT'];

        if (empty($nome) || empty($salario) || empty($cargo) || empty($horasT)) {
            echo "Preencha todos os campos.";
            return;
        }

        try {
            global $pdo; // Certifique-se de que a conexão com o banco de dados está disponível
            $sql = "INSERT INTO funcionario (nome, salario, cargo, horasT) VALUES (:nome, :salario, :cargo, :horasT)";
            $stmt = $pdo->prepare($sql);
    
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':salario', $salario);
            $stmt->bindParam(':cargo', $cargo);
            $stmt->bindParam(':horasT', $horasT);
    
            $stmt->execute();
            echo "Funcionário cadastrado com sucesso!";
        } catch(PDOException $e) {
            echo "Erro ao cadastrar o funcionário: " . $e->getMessage();
        }
    }

    // Método para listar todos os funcionários cadastrados
    public function listarFuncionarios() {
        global $pdo; // Certifique-se de que a conexão com o banco de dados está disponível
        try {
            $sql = "SELECT * FROM funcionario";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            echo "Erro ao listar os funcionários: " . $e->getMessage();
            return [];
        }
    }
}
?>

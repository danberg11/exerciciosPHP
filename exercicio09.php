<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include 'cabecalho.php'; ?>
    <title>Calcular Novo Salário</title>
</head>
<body>
    <form class="form-control" method="POST">
        <div class="mb-3">
            <label class="form-label">Digite o salário atual: </label>
            <input type="number" class="form-control" name="salario" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Digite o percentual de reajuste: </label>
            <input type="number" class="form-control" name="percentual" required>
        </div>
        <button type="submit" class="btn btn-primary">Calcular Novo Salário</button>
    </form>

    <div class="form-control mt-3">
        <label class="form-label">Resultado:</label>
        <textarea class="form-control" rows="3" readonly>
            <?php
                // Incluindo o arquivo de funções
                include 'funcoes/funcoes.php';

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $salario = $_POST['salario'];
                    $percentual = $_POST['percentual'];

                    // Chama a função para calcular o novo salário
                    $novoSalario = calcularNovoSalario($salario, $percentual);

                    // Exibe o resultado formatado
                    echo "Novo salário: R$ " . number_format($novoSalario, 2, ',', '.');
                }
            ?>
        </textarea>
    </div>

    <button class="btn btn-primary mt-3">
        <a style="color: #fff; text-decoration: none;" href="menu.php">Voltar</a>
    </button>
</body>
</html>


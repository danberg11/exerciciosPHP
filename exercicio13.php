<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo do Custo das Maçãs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include('funcoes.php') ?> 
    <div class="container mt-5">
        <h2>Cálculo do Custo das Maçãs</h2>
        <form method="POST" class="form-control">
            <div class="mb-3">
                <label class="form-label">Digite o número de maçãs compradas: </label>
                <input type="number" class="form-control" name="quantidade" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Custo</button>
        </form>

        <div class="form-control mt-3">
            <label for="resultado" class="form-label">Resultado:</label>
            <textarea class="form-control" rows="3" readonly id="resultado">
                <?php
                    // Incluindo o arquivo de funções
                    include('funcoes.php');
                    
                    // Se a requisição for POST, chamamos a função para calcular
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $quantidade = $_POST['quantidade'];
                        echo calcularCustoMacas($quantidade);
                    }
                ?>
            </textarea>
        </div>
        <button class="btn btn-primary mt-3"><a style="color: #000;text-decoration: none;" href="menu.php">Voltar</a></button>
    </div>
</body>
</html>

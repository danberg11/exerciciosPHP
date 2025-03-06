<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo do Salário do Vendedor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Cálculo do Salário do Vendedor</h2>
        
        
        <?php include 'funcoes.php'; ?> 

        <form method="POST" class="form-control">
            <div class="mb-3">
                <label class="form-label">Digite o salário fixo: </label>
                <input type="number" class="form-control" name="salario_fixo" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Digite o valor das vendas efetuadas: </label>
                <input type="number" class="form-control" name="valor_vendas" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Salário</button>
        </form>

        <div class="form-control mt-3">
            <label for="resultado" class="form-label">Resultado:</label>
            <textarea class="form-control" rows="3" readonly id="resultado">
                <?php
                    
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $salario_fixo = $_POST['salario_fixo'];
                        $valor_vendas = $_POST['valor_vendas'];

                        echo calcularSalarioVend($salario_fixo, $valor_vendas);
                    }
                ?>
            </textarea>
        </div>
    </div>
</body>
</html>

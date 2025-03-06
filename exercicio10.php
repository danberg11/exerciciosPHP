<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Calcular Custo Final do Carro</title>
</head>
<body>
    <?php include 'funcoes.php'; ?>

    <div class="container mt-5">
        <h2>Calcular Custo Final do Carro</h2>
        <form method="POST">
            <div class="mb-3">
                <label for="custoFabrica" class="form-label">Custo de Fabrica (R$):</label>
                <input type="number" class="form-control" id="custoFabrica" name="custoFabrica" placeholder="Informe o custo de fábrica" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>

        <div class="mt-4">
            <label class="form-label">Resultado:</label>
            <textarea class="form-control" rows="3" readonly>
                <?php
                    
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $custoFabrica = floatval($_POST['custoFabrica']);

                        
                        echo calcularCustoFinal($custoFabrica);
                    }
                ?>
            </textarea>
        </div>
        <button class="btn btn-primary mt-3"><a style="color: #000;text-decoration: none;" href="menu.php">Voltar</a></button>
    </div>
</body>
</html>


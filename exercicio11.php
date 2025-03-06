<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Cálculo de Salário do Vendedor</title>
</head>
<body>
    <?php include 'funcoes.php'; ?> 

    <div class="container mt-5">
        <h2>Cálculo de Salário do Vendedor</h2>
        <form class="form-control" method="POST">
            <div class="mb-3">
                <label class="form-label">Número de Carros Vendidos: </label>
                <input type="number" class="form-control" name="num_carros" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Valor Total das Vendas: </label>
                <input type="number" class="form-control" name="valor_vendas" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Salário Fixo: </label>
                <input type="number" class="form-control" name="salario_fixo" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Comissão por Carro Vendido: </label>
                <input type="number" class="form-control" name="comissao_carro" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Salário</button>
        </form>  

        <div class="form-control mt-3">
            <label class="form-label">Resultado:</label>
            <textarea class="form-control" rows="5" readonly>
                <?php
                   
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $num_carros = $_POST['num_carros'];
                        $valor_vendas = $_POST['valor_vendas'];
                        $salario_fixo = $_POST['salario_fixo'];
                        $comissao_carro = $_POST['comissao_carro'];

                        
                        echo calcularSalarioVendedor($num_carros, $valor_vendas, $salario_fixo, $comissao_carro);
                    }
                ?>
            </textarea>
        </div>
        <button class="btn btn-primary mt-3"><a style="color: #000;text-decoration: none;" href="menu.php">Voltar</a></button>
    </div>
</body>
</html>

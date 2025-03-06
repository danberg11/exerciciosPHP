<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo do Saldo do Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Cálculo do Saldo do Cliente</h2>
        
        <?php include 'funcoes.php'; ?> 

        <form method="POST" class="form-control">
            <div class="mb-3">
                <label class="form-label">Número da conta: </label>
                <input type="number" class="form-control" name="numero_conta" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Saldo: </label>
                <input type="number" class="form-control" name="saldo" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Débito: </label>
                <input type="number" class="form-control" name="debito" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Crédito: </label>
                <input type="number" class="form-control" name="credito" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Saldo</button>
        </form>

        <div class="form-control mt-3">
            <label for="resultado" class="form-label">Resultado:</label>
            <textarea class="form-control" rows="5" readonly id="resultado">
                <?php
                    
                    
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        
                        $numero_conta = $_POST['numero_conta'];
                        $saldo = $_POST['saldo'];
                        $debito = $_POST['debito'];
                        $credito = $_POST['credito'];

                        
                        echo calcularSaldoCliente($numero_conta, $saldo, $debito, $credito);
                    }
                ?>
            </textarea>
        </div>
        <button class="btn btn-primary mt-3"><a style="color: #000;text-decoration: none;" href="menu.php">Voltar</a></button>
    </div>
</body>
</html>


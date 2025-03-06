<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores entre 1 e N</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Exibir Valores de 1 até N</h2>
        <?php include 'funcoes.php'; ?>
        
        <form method="POST" class="form-control">
            <div class="mb-3">
                <label class="form-label">Digite um número N (maior que zero): </label>
                <input type="number" class="form-control" name="numero" required>
            </div>
            <button type="submit" class="btn btn-primary">Exibir Valores</button>
        </form>

        <div class="form-control mt-3">
            <label for="resultado" class="form-label">Resultado:</label>
            <textarea class="form-control" rows="5" readonly id="resultado">
                <?php
                    
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        
                        $numero = $_POST['numero'];

                        
                        if ($numero > 0) {
                           
                            echo exibirValores($numero);

                        } else {
                            echo "Por favor, insira um número maior que zero.";
                        }
                    }
                ?>
            </textarea>
        </div>
        <button class="btn btn-primary mt-3"><a style="color: #000;text-decoration: none;" href="menu.php">Voltar</a></button>
    </div>
</body>
</html>

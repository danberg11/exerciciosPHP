<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include 'cabecalho.php'; ?> 
    <title>Calcular Área do Retângulo</title>
</head>
<body>
    <?php include 'funcoes.php'; ?>

    <div class="container mt-5">
        <h2>Calcular Área do Retângulo</h2>
        <form class="form-control" method="POST">
            <div class="mb-3">
                <label class="form-label">Digite a base do retângulo: </label>
                <input type="number" class="form-control" name="base" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Digite a altura do retângulo: </label>
                <input type="number" class="form-control" name="altura" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Área</button>
        </form>

        <div class="form-control mt-3">
            <label class="form-label">Resultado:</label>
            <textarea class="form-control" rows="3" readonly>
                <?php
                    
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $base = $_POST['base'];
                        $altura = $_POST['altura'];

                        
                        echo calcularAreaRetangulo($base, $altura);
                    }
                ?>
            </textarea>
        </div>

        <button class="btn btn-primary mt-3">
            <a style="color: #fff; text-decoration: none;" href="menu.php">Voltar</a>
        </button>
    </div>
</body>
</html>

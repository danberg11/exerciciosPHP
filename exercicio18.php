<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar Números Negativos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Contar Números Negativos</h2>
        <?php include 'funcoes.php'; ?>
        
        <form method="POST" class="form-control">
            <div class="mb-3">
                <label class="form-label">Digite 10 números:</label>
                <input type="number" class="form-control mb-2" name="numero1" required>
                <input type="number" class="form-control mb-2" name="numero2" required>
                <input type="number" class="form-control mb-2" name="numero3" required>
                <input type="number" class="form-control mb-2" name="numero4" required>
                <input type="number" class="form-control mb-2" name="numero5" required>
                <input type="number" class="form-control mb-2" name="numero6" required>
                <input type="number" class="form-control mb-2" name="numero7" required>
                <input type="number" class="form-control mb-2" name="numero8" required>
                <input type="number" class="form-control mb-2" name="numero9" required>
                <input type="number" class="form-control mb-2" name="numero10" required>
            </div>
            <button type="submit" class="btn btn-primary">Contar Números Negativos</button>
        </form>

        <div class="form-control mt-3">
            <label for="resultado" class="form-label">Resultado:</label>
            <textarea class="form-control" rows="5" readonly id="resultado">
                <?php
                   

                    
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        
                        $numeros = array(
                            $_POST['numero1'], $_POST['numero2'], $_POST['numero3'], $_POST['numero4'],
                            $_POST['numero5'], $_POST['numero6'], $_POST['numero7'], $_POST['numero8'],
                            $_POST['numero9'], $_POST['numero10']
                        );

                        
                        echo contarNegativos($numeros);
                    }
                ?>
            </textarea>
        </div>
        <button class="btn btn-primary mt-3"><a style="color: #000;text-decoration: none;" href="menu.php">Voltar</a></button>
    </div>
</body>
</html>

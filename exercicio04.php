<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Cálculo de Média</title>
</head>
<body>
    <form class="form-control" method="POST">
        <div class="mb-3">
            <label class="form-label">Nota 1: </label>
            <input type="number" class="form-control" name="nota1" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nota 2: </label>
            <input type="number" class="form-control" name="nota2" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nota 3: </label>
            <input type="number" class="form-control" name="nota3" required>
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>  
 
    <div class="form-control mt-3">
        <label class="form-label">Resultado:</label>
        <textarea class="form-control" rows="5" readonly>
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $nota1 = $_POST['nota1'];
                    $nota2 = $_POST['nota2'];
                    $nota3 = $_POST['nota3'];
                    $media = ($nota1 + $nota2 + $nota3) / 3;
                    echo "Média: " . number_format($media, 2) . "\n";
                   
                    if ($media < 5) {
                        $notaNecessaria = 10 - $media + 2;
                        echo "Situação: Aluno em recuperação\n";
                        echo "Nota necessária para passar: " . number_format($notaNecessaria, 2);
                    } elseif ($media < 7) {
                        $notaNecessaria = 10 - $media;
                        echo "Situação: Aluno em prova final\n";
                        echo "Nota necessária na prova final: " . number_format($notaNecessaria, 2);
                    } else {
                        echo "Situação: Aluno aprovado por média.";
                    }
                }
            ?>
        </textarea>
    </div>
    <button class="btn btn-primary mt-3"><a style="color: #fff; text-decoration: none;" href="menu.php">Voltar</a></button>
</body>
</html>
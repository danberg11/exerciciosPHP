<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Cálculo de Idade em Dias</title>
</head>
<body>
    <?php include('funcoes.php') ?> 

    <div class="container mt-5">
        <h2>Cálculo de Idade em Dias</h2>
        <form class="form-control" method="POST">
            <div class="mb-3">
                <label class="form-label">Idade em Anos: </label>
                <input type="number" class="form-control" name="anos" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Idade em Meses: </label>
                <input type="number" class="form-control" name="meses" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Idade em Dias: </label>
                <input type="number" class="form-control" name="dias" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Idade em Dias</button>
        </form>  

        <div class="form-control mt-3">
            <label class="form-label">Resultado:</label>
            <textarea class="form-control" rows="5" readonly>
                <?php
                    
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $anos = $_POST['anos'];
                        $meses = $_POST['meses'];
                        $dias = $_POST['dias'];

                        // Chama a função para calcular a idade em dias
                        echo calcularIdadeEmDias($anos, $meses, $dias);
                    }
                ?>
            </textarea>
        </div>
        <button class="btn btn-primary mt-3"><a style="color: #000;text-decoration: none;" href="menu.php">Voltar</a></button>
    </div>
</body>
</html>


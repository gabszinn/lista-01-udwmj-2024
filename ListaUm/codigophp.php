<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temporizador Simples em PHP</title>
</head>
<body>
    <h1>Temporizador Simples</h1>

    <form method="POST">
        <label for="segundos">Digite o número de segundos:</label>
        <input type="number" id="segundos" name="segundos" required>
        <button type="submit">Iniciar Temporizador</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $segundos = intval($_POST['segundos']);

        if ($segundos > 0) {
            echo "<p>Temporizador iniciado para $segundos segundos...</p>";
            sleep($segundos);
            echo "<p>Passaram-se $segundos segundos!</p>";
        } else {
            echo "<p>Por favor, insira um valor maior que 0.</p>";
        }
    }
    ?>
</body>
</html>

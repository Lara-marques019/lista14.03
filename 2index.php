<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Média</title>
</head>
<body>
    <h2>Calculadora de Média</h2>
    <form action="processa.php" method="POST">
        <label for="nota1">Nota 1:</label>
        <input type="number" name="nota1" step="0.1" required><br><br>

        <label for="nota2">Nota 2:</label>
        <input type="number" name="nota2" step="0.1" required><br><br>

        <label for="nota3">Nota 3:</label>
        <input type="number" name="nota3" step="0.1" required><br><br>

        <label for="nota4">Nota 4:</label>
        <input type="number" name="nota4" step="0.1" required><br><br>

        <input type="submit" value="Calcular Média">
    </form>
</body>
</html>

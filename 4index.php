<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>
<body>
    <h2>Calculadora de IMC</h2>
    <form action="calcula.php" method="POST">
        <label for="peso">Peso (kg):</label>
        <input type="number" name="peso" step="0.1" required><br><br>

        <label for="altura">Altura (m):</label>
        <input type="number" name="altura" step="0.01" required><br><br>

        <input type="submit" value="Calcular IMC">
    </form>
</body>
</html>

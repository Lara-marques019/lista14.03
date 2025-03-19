<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Salário Térmico</title>
</head>
<body>
    <h2>Calculadora de Salário Térmico</h2>
    <form action="calcula.php" method="POST">
        <label for="salario">Salário do Funcionário (R$):</label>
        <input type="number" name="salario" step="0.01" required><br><br>

        <label for="filhos">Quantidade de Filhos:</label>
        <input type="number" name="filhos" required><br><br>

        <input type="submit" value="Calcular Salário Térmico">
    </form>
</body>
</html>

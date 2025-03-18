<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparador de Números</title>
</head>
<body>
    <h2>Digite dois números para comparar</h2>
    <form action="calcular.php" method="POST">
        <label for="num1">Primeiro Número:</label>
        <input type="number" name="num1" required>
        <br><br>
        <label for="num2">Segundo Número:</label>
        <input type="number" name="num2" required>
        <br><br>
        <input type="submit" value="Comparar">
    </form>
</body>
</html>

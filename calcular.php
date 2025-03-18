<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os valores do formulário
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // Verifica qual número é maior
    if ($num1 > $num2) {
        $resultado = "O primeiro número ($num1) é maior que o segundo ($num2).";
    } elseif ($num1 < $num2) {
        $resultado = "O segundo número ($num2) é maior que o primeiro ($num1).";
    } else {
        $resultado = "Os dois números são iguais.";
    }
} else {
    $resultado = "Erro: Nenhum número foi enviado.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Comparação</title>
</head>
<body>
    <h2>Resultado:</h2>
    <p><?php echo $resultado; ?></p>
    <a href="index.php">Voltar</a>
</body>
</html>

<?php
// Verificando se os dados foram recebidos via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebendo os dados do formulário
    $peso = floatval($_POST['peso']);
    $altura = floatval($_POST['altura']);

    // Calculando o IMC
    $imc = $peso / ($altura * $altura);

    // Determinando a condição do IMC
    if ($imc < 18.5) {
        $condicao = "Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        $condicao = "Peso normal";
    } elseif ($imc >= 25 && $imc < 29.9) {
        $condicao = "Sobrepeso";
    } elseif ($imc >= 30 && $imc < 34.9) {
        $condicao = "Obesidade grau 1";
    } elseif ($imc >= 35 && $imc < 39.9) {
        $condicao = "Obesidade grau 2";
    } else {
        $condicao = "Obesidade grau 3 (obesidade mórbida)";
    }

    // Exibindo o resultado
    echo "<h2>Resultado:</h2>";
    echo "IMC: " . number_format($imc, 2, ',', '.') . "<br>";
    echo "Condição: " . $condicao . "<br>";
} else {
    // Caso o formulário não tenha sido enviado corretamente
    echo "<h2>Por favor, preencha o formulário para calcular o IMC.</h2>";
}
?>

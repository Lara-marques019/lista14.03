<?php
// Verificando se os dados foram recebidos via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebendo os dados do formulário
    $salario = floatval($_POST['salario']);
    $filhos = intval($_POST['filhos']);

    // Calculando o salário térmico
    $aumento = 0;

    // Se o salário for até R$ 800,00, o aumento é de 30%
    if ($salario <= 800) {
        $aumento = $salario * 0.30; // 30% do salário
    }

    // Se o número de filhos for maior que 1, o aumento é de R$ 90,00 por filho adicional
    if ($filhos > 1) {
        $aumento += ($filhos - 1) * 90; // R$ 90 por filho a mais que 1
    }

    // Calculando o salário final com o aumento
    $salarioFinal = $salario + $aumento;

    // Exibindo o resultado
    echo "<h2>Resultado:</h2>";
    echo "Salário Inicial: R$ " . number_format($salario, 2, ',', '.') . "<br>";
    echo "Aumento Total: R$ " . number_format($aumento, 2, ',', '.') . "<br>";
    echo "Salário Final: R$ " . number_format($salarioFinal, 2, ',', '.') . "<br>";
} else {
    // Caso o formulário não tenha sido enviado corretamente
    echo "<h2>Por favor, preencha o formulário para calcular o salário térmico.</h2>";
}
?>

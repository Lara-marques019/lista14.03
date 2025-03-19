<?php
// Verificando se os dados foram recebidos via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebendo as notas do formulário
    $nota1 = floatval($_POST['nota1']);
    $nota2 = floatval($_POST['nota2']);
    $nota3 = floatval($_POST['nota3']);
    $nota4 = floatval($_POST['nota4']);

    // Calculando a média
    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    // Verificando se o aluno está aprovado ou reprovado
    if ($media >= 5) {
        echo "<h2>Aluno aprovado com média: " . number_format($media, 2) . "</h2>";
    } else {
        echo "<h2>Aluno reprovado com média: " . number_format($media, 2) . "</h2>";
    }
} else {
    // Caso o formulário não tenha sido enviado corretamente
    echo "<h2>Por favor, preencha o formulário para calcular a média.</h2>";
}
?>
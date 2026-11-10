
<?php

function calcularMedia($nota1, $nota2, $nota3) {
    return ($nota1 + $nota2 + $nota3) / 3;
}

function verificarMedia($media) {
    if ($media >= 7) {
        return "Aprovado";
    } else {
        return "Reprovado";
    }
}

$media = calcularMedia(8, 6, 10);

// Exibindo a média e a situação do aluno
echo "Média final: " . number_format($media, 2, ',', '.') . "<br>";
echo "Situação: " . verificarMedia($media);

?>
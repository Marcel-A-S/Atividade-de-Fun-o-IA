<?php

function verificarMedia($media) {
    if ($media >= 7) {
        return "Aprovado";
    } else {
        return "Reprovado";
    }
}

// Testando a função
echo "Média 7.0: " . verificaMedia(7);
echo "<br>";
echo "Média 5.5: " . verificaMedia(5.5);

?>
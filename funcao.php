<?php

function calcularMedia($nota1, $nota2, $nota3){
    return ($nota1 + $nota2 + $nota3) /3;

}

function verificarMedia($media) {
    if ($media >= 7) {
        return "O aluno está aprovado";
    } else {
        return "O aluno não está aprovado";
    }
}

$media = calcularMedia(8,6,10);
echo verificarMedia($media)


?>
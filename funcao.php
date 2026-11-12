<?php
function  apresentarAluno($nome, $idade)
{
    return $nome . "tem" . $idade . "anos.";
}

echo apresentarAluno("Pedro", 18);
?>
<?php
 function verificaMedia($media){
    if ($media >= 7) {
        return "Aprovado";
    } else {
        return "reprovado";
    }
 }
 echo verificaMedia(7);
 

?>
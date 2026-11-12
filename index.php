<?php
/**
 * Arquivo Principal (index.php)
 * Exemplo de função de apresentação de aluno em PHP
 */

function apresentarAluno($nome, $idade)
{
    return $nome . " tem " . $idade . " anos.";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apresentação do Aluno</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            text-align: center;
            padding-top: 100px;
        }
        .container {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            display: inline-block;
        }
        h1 {
            color: #2c3e50;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1><?php echo apresentarAluno("Pedro", 18); ?></h1>
        <p>Este é um plano de estudo desenvolvido pela <b>IA</b>.</p>
    </div>

</body>
</html>
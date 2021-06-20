<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <?php
            $nome = "Paulo Henrique Leme";

            echo "Seu nome é ". strtolower($nome). "<br>";//tudo em minúscula
            echo "SEU NOME É ". strtoupper($nome);//tudo em maiúscula
        ?>
    </div>
</body>

</html>
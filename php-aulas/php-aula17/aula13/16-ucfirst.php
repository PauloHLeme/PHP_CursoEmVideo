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
        $nome = "paulo HENRIQUE leme";

        //transforma a primeira letra em maiúscula (Upper Case First)
        echo "Seu nome é " . ucfirst($nome) . "<br>";
        echo "Seu nome é ". ucfirst(strtolower($nome)). "<br>";

        //Transforma a primeira letra de cada palavra em maiúscula (Upper Case Words)
        echo "Seu nome é ". ucwords(strtolower($nome)). "<br>";

        //Transforma a string ao avesso
        echo "Seu nome é ". strrev($nome). "<br>";
        ?>
    </div>
</body>

</html>
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
            $text = "    Aqui temos um texto gigante criado por PHP que vai mostrar o funcionamento da função wordwrap     ";
            $result = wordwrap($text,30,"<br>\n",false);

            echo $result;
            echo "<br>". strlen($text);//quantidade de caracteres, incluindo espaços
            echo "<br>". trim($text); //ltrim e rtrim, left e right
        ?>
    </div>
</body>

</html>
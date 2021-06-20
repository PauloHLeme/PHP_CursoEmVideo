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
        $value = 99;
        $letter = "P";
        
        //Retorna a letra relacionada ao seu código numérico
        $letra = chr($value);

        //Retorna o código numérico relacionado a sua letra
        $valor = ord($letter);

        echo "A letra de código $value é $letra.<br>";
        echo "A letra $letter tem o código numérico $valor. <br>";
        ?>
    </div>
</body>

</html>
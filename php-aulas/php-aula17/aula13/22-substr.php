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
        $site = "Curso em Video";

        //Retorna uma parte de uma string. O primeiro valor é onde se inicia a fatia, e o segundo valor é a quantidade de caracteres coletados. Podemos utilizar valores negativos para contar da direita até a esquerda.
        $sub = substr($site,0,5);

        echo $sub;

        ?>
    </div>
</body>

</html>
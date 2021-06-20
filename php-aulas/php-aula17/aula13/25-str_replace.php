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
        $mentira = "Gosto de estudar Matemática.";

        //Substitui um termo por outro dentro da frase (case sensitive)
        $verdade = str_replace("Matemática","PHP",$mentira);

        //Substitui um termo por outro dentro da frase, ignorando upper ou lower case
        $verdadeIgnorante = str_ireplace("matemática", "PHP",$mentira);

        echo "$verdade <br>";
        echo "$verdadeIgnorante <br>";
        ?>
    </div>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <pre>
            <?php
            $v = array("A", "J", "M", "X", "K");
            print_r($v);

            //Coloca os valores em ordem alfanumérica dentro das posições existente
            sort($v);
            print_r($v);

            //Coloca os valores em ordem alfanumérica REVERSA dentro das posições existentes
            rsort($v);
            print_r($v);

            $v = array("A", "J", "M", "X", "K");

            //Coloca os valores em ordem alfanumérica MOVENDO INCLUSIVE os índices
            asort($v);
            print_r($v);

            //Coloca os valores em ordem alfanumérica REVERSA, MOVENDO INCLUSIVE os índices
            arsort($v);
            print_r($v);
            ?>
        </pre>
    </div>
</body>

</html>
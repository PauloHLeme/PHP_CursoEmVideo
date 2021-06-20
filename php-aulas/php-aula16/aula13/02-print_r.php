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
        $v [0] = 4;
        $v [1] = 8;
        $v [2] = 3;

        /**
         * Permite a exibição de todos os valores de um array. Útil durante a fase de desenvolvimento, para checarmos se as entradas estão acontecendo corretamente
         * Saída
         * Array ( [0] => 4 [1] => 8 [2] => 3 )
         */
        var_dump($v);
        echo "<br><br>";

        $v2 = array (3,7,6,2,1,9);
        var_export($v2)
        ?>
    </div>
</body>

</html>
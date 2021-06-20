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

            //Adiciona o valor na PRIMEIRA posição do array, arrastando as outras posições uma casa adiante
            array_unshift($v, "O");
            print_r($v);

            //Remove a PRIMEIRA posição da array e também seu valor, puxando todas as outras posições uma casa atrás
            array_shift($v);
            print_r($v);

            ?>
        </pre>
    </div>
</body>

</html>
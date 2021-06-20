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
            $valor = $_GET['val'];
            $rq = sqrt($valor);
            echo "A raíz de $valor é igual a ". number_format($rq,2);
        ?>
        <br>
        <a href="01exercicio.html">Voltar</a>
    </div>
</body>

</html>
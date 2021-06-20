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
            $name = isset($_GET['nome']) ? $_GET['nome'] : 'Não configurado';
            $year = isset($_GET['ano']) ? $_GET['ano']: 0;
            $sex = isset($_GET['sex'])? $_GET['sex'] : " sexo não informado";
            $age = date("Y") - $year;

            echo "$name é $sex e tem $age anos."
        ?>
        <br>
        <a href="02exercicio.html">Voltar</a>
    </div>
</body>

</html>
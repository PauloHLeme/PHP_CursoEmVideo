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
            $count = 1;
            
            while ($count <= 5) {
            $val = isset($_GET["val$count"])? $_GET["val$count"]: 1;
                echo "Valor $count é igual a $val<br>";
                $count++;
            }
        ?>
        <br>
        <a href="javascript:history.go(-1)" class= "botao">Voltar</a>
    </div>
</body>

</html>
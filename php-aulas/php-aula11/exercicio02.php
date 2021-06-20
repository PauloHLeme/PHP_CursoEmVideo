<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <form action="exercicio02p2.php" method="get">
            <?php
                $count = 1;
                
                while ($count <= 5) {
                    echo "Valor $count: <input type='number' name='val$count' id='val$count' min='0' max='100' required value='0'><br>";
                    $count++;
                }
            ?>
            <br><br>
            <input type="submit" value="Enviar" class="botao">
        </form>
    </div>
</body>

</html>
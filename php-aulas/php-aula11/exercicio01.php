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
            $num = 10;

            while ($num>=1) {
                echo "$num <br>";
                $num-= 2;
            }
        ?>
        <br>
    </div>
</body>

</html>
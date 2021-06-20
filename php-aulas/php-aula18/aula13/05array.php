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
            $v = array(
                "nome" => "Ana",
                "idade" => 23,
                "peso" => 65.5);
            $v ["fuma"] = false;

            foreach ($v as $key => $value) {
                echo "O valor de $key é $value <br>";
            }
            ?>
        </pre>
    </div>
</body>

</html>
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
                        3 => 5,
                        1 => 9,
                        "tambémAceitaString" => 8,
                        5 => 7);
                        $v[] = "E";
                        unset ($v[1]);
                        print_r($v);
            ?>
        </pre>
    </div>
</body>

</html>
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
            $v = array(2=>"A", 5=>"J", 0=>"M", 3=>"X", 4=>"K");
            print_r($v);
            
            //Coloca os índices(key) em ordem alfanumérica, levando os valores junto
            ksort($v);
            print_r($v);

            //Coloca os índices(key) em ordem aufanumérica REVERSA, levando os valores junto
            krsort($v);
            print_r($v);
            ?>
        </pre>
    </div>
</body>

</html>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $val = isset($_GET['valor'])? $_GET['valor']: 1;
        $res =1;
        do {
            $res *= $val;
            $val--;
        } while ($val >=1);
        echo "O Fatorial de ". $_GET['valor']. " é ". $res. "!";
    ?>
    <p><a href="02-index.html" class="botao">Voltar</a></p>
</div>
</body>
</html>
 
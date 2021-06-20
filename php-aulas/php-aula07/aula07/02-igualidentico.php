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
       $a = 3;
       $b = "3";
       $e = $a == $b ? "sim" : 'não';
       $i = $a === $b ? 'sim' : 'não';

       echo "Os resultados são iguais? $e";
       echo "<br> Os resultados são idênticos? $i";
    ?>
</div>
</body>
</html>
 
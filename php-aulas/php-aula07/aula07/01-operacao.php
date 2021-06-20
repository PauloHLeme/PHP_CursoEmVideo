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
      $tipo = $_GET['op'];
      $num1 = $_GET['x'];
      $num2 = $_GET['y'];
      $res = $tipo == 's' ? $num1+$num2 : $num1*$num2;
      echo "Os valores inseridos foram $num1 e $num2";
      echo "<br>O resultado é $res";
    ?>
</div>
</body>
</html>
 
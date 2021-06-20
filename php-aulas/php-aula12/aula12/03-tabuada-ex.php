<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
	h1 { font: 20pt Arial; }
  </style>
</head>
<body>
<div>
    <?php
      $value = $_GET['num'];
      $multiplier = 1;
      echo "<h1>Tabuada de $value</h1>";
      do {
        echo "$value x $multiplier = ". $value * $multiplier. "<br>";
        $multiplier++;
      } while ($multiplier <= 10);
    ?>
	<br/>
	<a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 
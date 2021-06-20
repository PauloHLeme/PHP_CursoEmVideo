<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
	h1 { font: 20pt Arial; }
	h2 { font: 18pt Arial; }
  </style>
</head>
<body>
<div>
    <?php
      $number = isset($_GET['num'])? $_GET['num']: 1;
	  $amount = 0;

	  echo "<h1>Analizando o número $number</h1>";
	  echo "Valores múltiplos:";
	  for ($c=1; $c <= $number; $c++) { 
		  $primo = $number % $c;
		  if ($primo == 0) {
			  echo "$c ";
			  $amount++;
		  }
	  }
		echo "<br>Total de múltiplos: $amount";
	  if ($amount != 2) {
		  $res = "<span class='foco'>NÃO É PRIMO!</span>";
	  }else {
		  $res = "<span class='foco'>É PRIMO!</span>";
	  }
	  	echo "<h2>Resultado: $number $res</h2>";
    ?>
	<br/>
	<a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 
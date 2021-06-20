<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
	<form method="get" action="03-tabuada-ex.php">
	<span>Número:</span>
	<select name="num" >
    <?php
	for ($val = 1; $val <= 10; $val++) { 
		echo "<option value='$val'>$val</option>";
	}
	?>
	</select>
	<input class="botao" type="submit" value="Tabuada"/>
	</form>
</div>
</body>
</html>
 
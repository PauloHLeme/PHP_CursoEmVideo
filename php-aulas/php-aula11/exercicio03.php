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
            $start = isset($_GET['inicio']) ? $_GET['inicio']: 0;
            $end = isset($_GET['final'])? $_GET['final']: 0;
            $step = isset($_GET['incremento'])? $_GET['incremento']: 0;

            if ($start < $end) {
                while ($start <= $end) {
                    echo "$start ";
                    $start += $step;
                }
            }else{
                while ($start>=$end) {
                    echo "$start ";
                    $start -=$step;
                }
            }
        ?>
        <br><br>
        <a class="botao" href="javascript:history.go(-1)">Voltar</a>
        </form>
    </div>
</body>

</html>
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
            $estado = isset($_GET['uf']) ? $_GET['uf'] : 0;

            switch ($estado) {
                case 'AM':
                case 'RR':
                case 'AP':
                case 'PA':
                case 'TO':
                case 'RO':
                case 'AC':
                    echo "$estado pertence a <span class= 'foco'>região norte<span>";
                    break;
                case 'MA':
                case 'PI':
                case 'CE':
                case 'RN':
                case 'PE':
                case 'PB':
                case 'SE':
                case 'AL':
                case 'BA':
                    echo "$estado pertence a <span class= 'foco'>região nordeste<span>";
                    break;
                case 'MT':
                case 'MS':
                case 'GO':
                    echo "$estado pertence a <span class= 'foco'>região centro-oeste<span>";
                    break;
                case 'SP':
                case 'RJ':
                case 'ES':
                case 'MG':
                    echo "$estado pertence a <span class= 'foco'>região sudeste<span>";
                    break;
                case 'PR':
                case 'RS':
                case 'SC':
                    echo "$estado pertence a <span class= 'foco'>região sul<span>";
                    break;
                default:
                    echo "Selecione um estado";
                    break;
            }
        ?>
        <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>

</html>
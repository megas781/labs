<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>L2. Калачев Глеб, 181-321</title>

    <link rel="stylesheet" href="../php-template/common/compose.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>

<?php

//Очень важно соблюдать порядок подгрузки файлов. Сначал дефолтный setup, потом личный setup станицы, и только после всех установок можно подгружать header

include $_SERVER['DOCUMENT_ROOT'] . '/App.php';

include "main-page-setup.php";

App::includeHeader();
?>

<div style="padding: 16px; display: block">
    <?php



if (gettype($n) === 'integer' && $n > 0) {

    $theArray = make2dArray($param, $step, $n);

    echo "max: $maxValue <br>";
    echo "min: $minValue <br>";
    echo "sum: " . round($sum, 3) . "<br>";
    echo "avr: " . average() . " <br>";


    switch ($distributeType) {
        case 'A':
            buildTypeA($theArray);
            break;
        case 'B':
            buildTypeB($theArray);
            break;
        case 'C':
            buildTypeC($theArray);
            break;
        case 'D':
            buildTypeD($theArray);
            break;
        case 'E':
            buildTypeE($theArray);
            break;
        default:
            echo 'error: default case';
    }

} else {
    echo 'Неверная итерация';
}
    ?>
</div>

<?php

App::includeFooter();

?>
</body>
</html>
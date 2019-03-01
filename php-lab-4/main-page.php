<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Template</title>

    <link rel="stylesheet" href="../php-template/common/compose.css">
    <link rel="stylesheet" href="main-page.css">
</head>
<body>

<?php

include $_SERVER['DOCUMENT_ROOT'] . '/App.php';

//Собственно логика данной страницы и переопределениее дефолтной установки
include "main-page-setup.php";


App::includeHeader();
?>

<!-- Поехали! -->
<div class="container">
    <?php

    OldTableBuilder::buildTableWith('Имя*Глеб#Фамилия*Калачев#Группа*181-321', 4, 'Выполнил:');


    $tableNumber = 0;
    for ($i = 0; $i < count($tableStringFormats); $i++) {
//echo 'сделать таблицу? <br>';
        if (!empty($tableStringFormats[$i])) {
            $tableNumber += 1;
            OldTableBuilder::buildTableWith($tableStringFormats[$i], 8, "Таблица #" . ($tableNumber));
        }

    }

    ?>
</div>

<?php

App::includeFooter();

?>

</body>
</html>
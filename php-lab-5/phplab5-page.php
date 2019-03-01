<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Template</title>

<!--    Переопредели меня-->
    <link rel="stylesheet" href="../php-template/common/compose.css">
    <link rel="stylesheet" href="phplab5-page.css">
</head>
<body class="phplab5">

<?php

//Переопредели меня
include $_SERVER['DOCUMENT_ROOT'] . '/App.php';
//Переопредели меня
include "phplab5-page-setup.php";
//Переопредели меня
App::includeHeader();

?>

<!-- Поехали! -->




<main class="phplab5__main">
<!--    <div class="_flex-row">-->
        <aside class="sidebar phplab5__sidebar">
            <h3 class="sidebar__title">Таблицы умножения</h3>
            <ul class="list sidebar__list">

                <?php
                    for ($i = 1; $i <= 9; $i++) {
                        echo "<li class='list__item sidebar__list-item'><a href='?layout-type=". $selectedLayoutTypeId . "&picked-digit=". $i ."' class='list__link sidebar__list-link " . ($i === $pickedDigit ? 'sidebar__list-link_active' : '');
                        echo "'>";
                        echo $i === 1 ? 'Все' : 'Умножение на ' . $i;
                        echo "</a></li>";
                    }
                ?>
            </ul>
        </aside>
        <div class="_flex-growing phplab5__content-view">
            <?php TableBuilder::buildMultiplicationTable() ?>
        </div>
<!--    </div>-->
</main>



<?php
//Переопредели меня
App::includeFooter();
?>

</body>
</html>
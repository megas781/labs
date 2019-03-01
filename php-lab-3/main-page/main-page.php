<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Template</title>

    <link rel="stylesheet" href="../../php-template/common/compose.css">
    <link rel="stylesheet" href="main-page.css">
</head>
<body>

<?php


//подгрузка дефолтной установки из template
include $_SERVER['DOCUMENT_ROOT'] . '/App.php';

//Собственно логика данной страницы и переопределениее дефолтной установки
include "main-page-setup.php";


//Подгрузка универсального header'a из template
App::includeHeader();

?>

<!-- Поехали! -->


<div class="numpad-container">
    <div class="numpad">

        <div class="numpad__display"><?php echo $enteredNumber ?></div>

        <div class="numpad__input-view">
            <div class="numpad__number-row">
                <a href="?entered-number=<?php echo $enteredNumber ?>&input-value=1&taps=<?php echo $tapCounter ?>" class="numpad__button numpad__digit-button">1</a>
                <a href="?entered-number=<?php echo $enteredNumber ?>&input-value=2&taps=<?php echo $tapCounter ?>" class="numpad__button numpad__digit-button">2</a>
                <a href="?entered-number=<?php echo $enteredNumber ?>&input-value=3&taps=<?php echo $tapCounter ?>" class="numpad__button numpad__digit-button">3</a>
                <a href="?entered-number=<?php echo $enteredNumber ?>&input-value=4&taps=<?php echo $tapCounter ?>" class="numpad__button numpad__digit-button">4</a>
                <a href="?entered-number=<?php echo $enteredNumber ?>&input-value=5&taps=<?php echo $tapCounter ?>" class="numpad__button numpad__digit-button">5</a>
            </div>

            <div class="numpad__number-row">
                <a href="?entered-number=<?php echo $enteredNumber ?>&input-value=6&taps=<?php echo $tapCounter ?>" class="numpad__button numpad__digit-button">6</a>
                <a href="?entered-number=<?php echo $enteredNumber ?>&input-value=7&taps=<?php echo $tapCounter ?>" class="numpad__button numpad__digit-button">7</a>
                <a href="?entered-number=<?php echo $enteredNumber ?>&input-value=8&taps=<?php echo $tapCounter ?>" class="numpad__button numpad__digit-button">8</a>
                <a href="?entered-number=<?php echo $enteredNumber ?>&input-value=9&taps=<?php echo $tapCounter ?>" class="numpad__button numpad__digit-button">9</a>
                <a href="?entered-number=<?php echo $enteredNumber ?>&input-value=0&taps=<?php echo $tapCounter ?>" class="numpad__button numpad__digit-button">0</a>
            </div>

            <a href="?entered-number=<?php echo $enteredNumber ?>&input-value=reset&taps=<?php echo $tapCounter ?>" class="numpad__button numpad__cancel-button">СБРОС</a>
        </div>

    </div>
</div>




<?php



App::includeFooter();
?>

</body>
</html>
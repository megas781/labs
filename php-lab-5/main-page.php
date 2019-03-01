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

</head>
<body>

<?php

//Переопредели меня
include $_SERVER['DOCUMENT_ROOT'] . '/App.php';
//Переопредели меня
include "main-page-setup.php";
//Переопредели меня
App::includeHeader();

?>

<!-- Поехали! -->


<main class="">
    <div class="_flex-row">
        <aside class="sidebar">

        </aside>
    </div>
</main>



<?php
//Переопредели меня
App::includeFooter();
?>

</body>
</html>
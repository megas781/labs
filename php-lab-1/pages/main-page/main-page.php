<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="main-page.css">

    <title>Главная</title>
</head>
<body>

<?php
include '../../common/setup.php';
include('../../common/header/header.php');
include('../../common/breadcrumbs/breadcrumbs.php');
?>


<div class="pseudo-slider _flex-centering">
<!--    <img src="--><?php //echo getAccordingToTime('../../media/баннер-1.jpg','../../media/баннер-2.jpg') ?><!--" class="pseudo-slider__image" alt="">-->
    <div class="dim"></div>
    <h1 class="pseudo-slider__title">Качественный ремонт грузовых автомобилей</h1>
</div>


<?php include('../../common/footer/footer.php'); ?>

<script src="main-page.js"></script>

</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="services-page.css">

    <title>Главная</title>
</head>
<body>

<?php
include '../../common/setup.php';
include('../../common/header/header.php');
include '../../common/breadcrumbs/breadcrumbs.php';
?>

<div class="services">
    <div class="service serivces__service">
        <img src="<?php echo getAccordingToTime('https://contestimg.wish.com/api/webimage/55c781efaac03f719a857643-medium.jpg?cache_buster=c6faacf2f370c9ffcd793c056c6f3301', 'https://im0-tub-ru.yandex.net/i?id=d75ea3bc76e45b1d00a57e47112795ee&n=13&exp=1') ?>" class="service__image" alt="image">
        <h3>Диагностика</h3>
        <p class="service__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur doloremque laboriosam nemo! Aliquid neque obcaecati praesentium provident quia tenetur veniam...</p>
        <a href="#" class="service__detail-link">Подробнее...</a>
    </div>

    <div class="service serivces__service">
        <img src="<?php echo getAccordingToTime('https://www.givion.ru/upload/resize_cache/iblock/35c/200_200_0/35c611f5d724403356b6b7f894bb6390.png', 'https://im0-tub-ru.yandex.net/i?id=04462eb1a8defb2f51a394091cf9ea31&n=13') ?>" class="service__image" alt="image">
        <h3>Ремонт</h3>
        <p class="service__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur doloremque laboriosam nemo! Aliquid neque obcaecati praesentium provident quia tenetur veniam...</p>
        <a href="#" class="service__detail-link">Подробнее...</a>
    </div>

    <div class="service serivces__service">
        <img src="<?php echo getAccordingToTime('https://pp.userapi.com/c846216/v846216050/119d9a/USO6uBKVLPI.jpg', 'http://www.bhol.co.il/media/354665/_imagebank_orig_orig_8cbbdf722ba34f8086a0603963168c1f.jpg?anchor=center&amp;mode=crop&amp;width=200&amp;height=200&amp;rnd=131362439300000000') ?>" class="service__image" alt="image">
        <h3>Шиномонтаж</h3>
        <p class="service__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur doloremque laboriosam nemo! Aliquid neque obcaecati praesentium provident quia tenetur veniam...</p>
        <a href="#" class="service__detail-link">Подробнее...</a>
    </div>
</div>


<?php include ('../../common/footer/footer.php'); ?>

<script src="services-page.js"></script>

</body>
</html>
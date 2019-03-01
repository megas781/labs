<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="contacts-page.css">

    <title>Главная</title>
</head>
<body>
<?php
include '../../common/setup.php';
include('../../common/header/header.php');
include '../../common/breadcrumbs/breadcrumbs.php';
?>
<main class="wrapper">
    <h1 class="page-title">Контакты</h1>


    <?php

    class Contact
    {

        public $city, $street, $phone, $time, $email;

        function __construct($city, $street, $phone, $time, $email)
        {
            $this->city = $city;
            $this->street = $street;
            $this->phone = $phone;
            $this->time = $time;
            $this->email = $email;

        }
    }

    $fieldNames = ['Город', 'Улица/дом', 'Телефон', 'Время', 'Почта'];
    $contactEntities = [
        new Contact('Москва', 'Каширская 9, 5', '8 (495) 442 01 22', 'с 9:00 до 19:00', 'example@cat.com'),
        new Contact('Волгоград', 'Автомобистов 2, 57', '8 (916) 565 64 01', 'с 9:00 до 19:00', 'megas781@gmail.com')];


    ?>

    <div class="contact contacts-page__contact _flex-centering">
    <table>

    <?php
    //НАЧИНАЕМ СОЗДАНИЕ tr'ов
    foreach ($contactEntities as $value) {
        ?>


            <tr class="contact__inner">

                <td class="contact__left-side">

                    <table class="contact__table">
                        <tr>
                            <td><?php echo $fieldNames[0] ?></td>
                            <td><?php echo $value->city ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $fieldNames[1] ?></td>
                            <td><?php echo $value->street ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $fieldNames[2] ?></td>
                            <td><?php echo $value->phone ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $fieldNames[3] ?></td>
                            <td><?php echo $value->time ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $fieldNames[4] ?></td>
                            <td><a href="mailto:example@cat.lol"><?php echo $value->email ?></a></td>
                        </tr>
                    </table>
                    <button>Записаться</button>
                </td>

                <td class="contact__right-side">

                    <?php

                    $imageLink = getAccordingToTime("../../media/автосервис-$value->city-1.jpg", "../../media/автосервис-$value->city-2.jpg");

                    ?>

                    <img src="<?php echo $imageLink ?>" class="contact__image" alt="image">

                </td>
            </tr>

        <?php
        //ЗАКРЫТИЕ ЦИКЛА
    }
    ?>
    </table>
    </div>

</main>


<?php include('../../common/footer/footer.php'); ?>

<script src="contacts-page.js"></script>

</body>
</html>
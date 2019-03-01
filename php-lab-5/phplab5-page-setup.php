<?php
include "PhpLab5.php";
include "TableBuilder.php";
//Образец
//Кастомная установка для страницы
App::$headerTitle = 'PHP. Лабораторная #5. Таблицы умножения';
App::$footerInnerContent = 'мой php-lab-5';

$tableLayoutType;
$sidebarOption;


App::$headerInnerContent = "
<div class='segmented-control'>
    <a href='' class='segmented-control__item'>Табличная верстка</a>
    <a href='' class='segmented-control__item'>Блочная верстка</a>
</div>
";


?>

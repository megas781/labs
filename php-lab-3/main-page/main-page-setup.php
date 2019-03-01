<?php

App::$headerTitle = 'PHP. Лабораторная работа #3. Ввод цифр';

//php-lab-3 setup
//Вся логика страницы должна находиться в отдельном файле. В самой странице следует использовать только логику отображения страницы


//$digits = ['1','2','3','4','5','6','7','8','9','0'];

if (!array_key_exists('entered-number', $_GET)) {
    $enteredNumber = '';
} else {
    $enteredNumber = $_GET['entered-number'];
}

if (!array_key_exists('taps', $_GET)) {
    $tapCounter = 0;
} else {
    $tapCounter = (int)$_GET['taps'];
}

if (array_key_exists('input-value', $_GET)) {

    $inputValue = $_GET['input-value'];



    if ($inputValue === 'reset') {
        $enteredNumber = '';
    } elseif ($inputValue === '0' || (int)$inputValue > 0) {

        $enteredNumber .= (int)$inputValue;
    }
    $tapCounter += 1;

}



//Не знаю, насклько это правильно, но сейчас я после всех вычислений могу наконец-то установить контент header'a
App::$footerInnerContent = $tapCounter;

?>
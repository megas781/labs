<?php
include 'OldTableBuilder.php';


App::$headerTitle = 'PHP. Лабораторная #4. Динамическое построение таблиц';
App::$headerContent = '';
App::$footerContent = 'Зуй';

//$headerTitle = 'PHP. Лабораторная #4. Динамическое построение таблиц';
//$footerInnerContent = '';



$tableStringFormats = [
    '',
    'a1*a2*a3#b1*b2*b3#c1*c2*c3',
    'a1*a2#b1*b2#c1*c2',
    'a1*a2*a3#b1*b2*b3#c1*c2*c3',
    'asdf*fdsa*;lkj*jkl;#qwer*rewq*uiop*jioi#rfv*tgb*yhn*ujm',
    '1*2*3*4*5*6*7#1*2*3*4*5*6#1*2*3*4*5#1*2*3*4#1*2*3#1*2#1#1*2#1*2*3#1*2*3*4#1*2*3*4*5#1*2*3*4*5*6#1*2*3*4*5*6*7',
];


?>
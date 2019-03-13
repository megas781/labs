<?php

$doc = new DOMDocument();
$container = $doc->createElement('div');
$container->setAttribute('class', 'segmented-control');
$container->textContent = 'Hello there!';

$doc->appendChild($container);

echo $container->ownerDocument->saveHTML();

//echo $_SERVER['REMOTE_ADDR'];



//echo strlen('asdf');


//print_r(array_filter([1,3,4,5,6,8], function () {
//
//    return func_get_arg(0) > 4;
//
//}));


//function increase(&$number) {$number += 1;}
//$myAge = 18;
//increase($myAge);
//echo "Мой возраст: $myAge";



?>
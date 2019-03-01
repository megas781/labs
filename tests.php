<?php

$doc = new DOMDocument();
$container = $doc->createElement('div');
$container->setAttribute('class', 'segmented-control');
$container->textContent = 'Hello there!';

$doc->appendChild($container);

echo $container->ownerDocument->saveHTML();

?>
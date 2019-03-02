<?php
include "PhpLab5.php";

//Образец
//Кастомная установка для страницы
App::$headerTitle = 'PHP. Лабораторная #5. Таблицы умножения';
App::$footerContent = 'мой php-lab-5';


class LayoutType
{
    public $id, $label;

    public function __construct($id, $label)
    {
        $this->id = $id;
        $this->label = $label;
    }
}

function isDigit($any)
{
    if (is_numeric($any) and (int)$any >= 0 and (int)$any <= 9) {
        return true;
    } else {
        return false;
    }
}

$layoutTypes = [
    new LayoutType('table-layout', 'Табличная верстка'),
    new LayoutType('block-layout', 'Блочная верстка')
];


//setup selectedLayoutTypeId
if (isset($_GET['layout-type'])) {
    $selectedLayoutTypeId = $_GET['layout-type'];
} else {
    $selectedLayoutTypeId = '';
}

//setup pickedDigit
if (isset($_GET['picked-digit']) and isDigit($_GET['picked-digit'])) {
    $pickedDigit = (int)$_GET['picked-digit'];
} else {
    $pickedDigit = 1;
}


//Установка headerContent
{
    $doc = new DOMDocument();
    $segmentedControl = $doc->createElement('div');
    $doc->appendChild($segmentedControl);
    $segmentedControl->setAttribute('class', 'segmented-control');

    for ($i = 0; $i < count($layoutTypes); $i++) {
        $layout = $layoutTypes[$i];
        $item = $doc->createElement('a');
        $item->setAttribute('href', "?layout-type=" . $layout->id . '&picked-digit=' . $pickedDigit);
        $item->setAttribute('class', "segmented-control__item " . ($layout->id === $selectedLayoutTypeId ? 'segmented-control__item_active' : ''));

        $item->textContent = $layout->label;
        $segmentedControl->appendChild($item);
    }

    App::$headerContent = $segmentedControl->ownerDocument->saveHTML();
}


?>

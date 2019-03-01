<?php
include "PhpLab5.php";
include "TableBuilder.php";
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

$layoutTypes = [
    new LayoutType('table-layout', 'Табличная верстка'),
    new LayoutType('block-layout', 'Блочная верстка')
];


$selectedLayoutTypeId = 'table-layout';
$sidebarOption = '';


//Установка headerContent
{
    $doc = new DOMDocument();
    $segmentedControl = $doc->createElement('div');
    $doc->appendChild($segmentedControl);
    $segmentedControl->setAttribute('class', 'segmented-control');

    for ($i = 0; $i < count($layoutTypes); $i++) {
        $layout = $layoutTypes[$i];
        $item = $doc->createElement('a');
        $item->setAttribute('href', "?selected-layout=" . $layout->id);
//        echo $layout->id . "<br>";
//        echo $selectedLayoutTypeId . "<br>";
//
//        if ($layout->id === $selectedLayoutTypeId) {
//            echo 'равны';
//        } else {
//            echo 'не равны';
//        }

        $item->setAttribute('class', "segmented-control__item " . ($layout->id === $selectedLayoutTypeId ? 'segmented-control__item_active' : ''));
        $item->textContent = $layout->label;
        $segmentedControl->appendChild($item);
    }

    App::$headerContent = $segmentedControl->ownerDocument->saveHTML();
}


?>

<?php
App::$headerTitle = 'PHP. Лабораторная #2. Анализ математической функции';
App::$footerContent = '';

$param = 20;
$step = 1;
$n = 3;

$distributeType = 'D';

$maxAllowedValue = 500000;
$minAllowedValue = -500000;

$maxValue = null;
$minValue = null;


function f($x)
{

    if (gettype($x) !== 'double' && gettype($x) !== 'integer') {

        return 'error';

    } else {
        //Здесь мы знаем, что параметр верного типа.

        if ($x <= 10) {
            return round(pow($x, 2) * 0.33 + 4, 3);
        } elseif ($x >= 20) {


//            echo($x * 0.1 - 2 === 0.0);


            if ($x * 0.1 - 2 === 0.0) {
                return 'error';
            } else {
                return round(1 / ($x * 0.1 - 2) + 3, 3);
            }

        } else {
            return round(18 * $x - 3);
        }
    }

}

//function f($x) {
//    return $x * $x;
//}

//Функция работает с глобальными переменными
function analyzeNumber($number)
{

    //Определение минимального
    if ($GLOBALS['minValue'] === null) {
        $GLOBALS['minValue'] = $number;
    } elseif ($number < $GLOBALS['minValue']) {
        $GLOBALS['minValue'] = $number;
    }

    //Орпделение максимального
    if ($GLOBALS['maxValue'] === null) {
        $GLOBALS['maxValue'] = $number;
    } elseif ($number > $GLOBALS['maxValue']) {
        $GLOBALS['maxValue'] = $number;
    }
}

$count = 0;
$sum = 0;
function average()
{
    return round($GLOBALS['sum'] / $GLOBALS['count'], 3);
}

function make2dArray($param, $step, $n)
{

    $return2dArray = [];

    for ($i = 0; $i < $n; $i++) {

        $value = f($param + $step * $i);


        array_push($return2dArray, [$param + $step * $i, $value]);


        if ($value !== 'error') {
            $GLOBALS['count'] += 1;
            $GLOBALS['sum'] += $value;
            analyzeNumber($value);
        }


        if ($value <= $GLOBALS['minAllowedValue'] || $value >= $GLOBALS['maxAllowedValue']) {
            break;
        } else {
            continue;
        }

    }


    return $return2dArray;

}


function buildTypeA($array)
{
    for ($i = 0; $i < count($array); $i++) {
        echo 'f(' . ($array[$i][0]) . ')=' . $array[$i][1] . "<br>";
    }
}


function buildTypeB($array)
{
    echo "<ul>";

    for ($i = 0; $i < count($array); $i++) {
        echo "<li>" . 'f(' . ($array[$i][0]) . ')=' . $array[$i][1] . "</li>";
    }

    echo "</ul>";
}

//
function buildTypeC($array)
{
    echo "<ol>";

    for ($i = 0; $i < count($array); $i++) {
        echo "<li>" . 'f(' . ($array[$i][0]) . ')=' . $array[$i][1] . "</li>";
    }

    echo "</ol>";
}

//
function buildTypeD($array)
{
    echo "<table>";

    echo "<tr><th>№</th><th>x</th><th>f(x)</th></tr>";


    for ($i = 0; $i < count($array); $i++) {
        echo "<tr>";

        echo "<td>" . ($i + 1) . "</td>";

        echo "<td>" . ($array[$i][0]) . "</td>";

        echo "<td>" . $array[$i][1] . "</td>";

        echo "</tr>";
    }

    echo "</table>";
}

//
function buildTypeE($array)
{

    for ($i = 0; $i < count($array); $i++) {

        echo "<div class='div-type-e'>";
        echo 'f(' . $array[$i][0] . ')=' . $array[$i][1] . "<br>";
        echo "</div>";

    }

}

?>
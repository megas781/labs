<?php

class PhpLab5
{

    static $layoutTypes = [
        ['name' => 'table-view', 'label' => 'Табличная верстка'],
        ['name' => 'block-view', 'label' => 'Блочная верстка']
    ];

    static function drawView($layout, $digit)
    {
        if ($digit === 1) {

            if ($layout === 'block-layout') {
                PhpLab5::buildMultiplicationTableWithDivs();
            } else {
                PhpLab5::buildMultiplicationTable();
            }

        } else {
            if ($layout === 'block-layout') {
                self::buildOneDigitMultiplicationTableWithDivs($digit);
            } else {
                self::buildOneDigitMultiplicationTable($digit);
            }
        }

    }


    static function buildMultiplicationTable()
    {

        echo "<table>\n";

        for ($row = 1; $row <= 9; $row++) {

            echo "<tr>\n";

            for ($col = 1; $col <= 9; $col++) {

                if ($row === 1 or $col === 1) {
                    echo "<td class='td_title'>";
                } else {
                    echo "<td>";
                }

                echo self::getDigitLink($row * $col);

                echo "</td>\n";

            }

            echo "</tr>\n";
        }

        echo "</table>\n";
    }

    static function buildOneDigitMultiplicationTable($digit)
    {
        echo "<table>\n";

        for ($row = 1; $row <= 9; $row++) {

            echo "<tr>\n" . '<td>';

            echo "<span>" . self::getDigitLink($digit) . '*' . self::getDigitLink($row) . '=' . self::getDigitLink($row * $digit) . "</span>";

            echo "</td>\n" . "</tr>\n";
        }

        echo "</table>\n";
    }


    static function buildMultiplicationTableWithDivs()
    {

        echo "<div class='row'>\n";

        for ($row = 1; $row <= 9; $row++) {

            echo "<div class='column digit-table__column'>\n";

            for ($col = 1; $col <= 9; $col++) {

                echo "<div class='_flex-centering divCell'>";

                echo "<span>" . self::getDigitLink($row) . '*' . self::getDigitLink($col) . '=' . self::getDigitLink($row * $col) . "</span>";

                echo "</div>\n";

            }

            echo "</div>\n";
        }

        echo "</div>\n";
    }

    static function buildOneDigitMultiplicationTableWithDivs($digit)
    {

        echo "<div class='column digit-table__column'>\n";

        for ($row = 1; $row <= 9; $row++) {



            echo "<div class='_flex-centering divCell'>";

            echo "<span>" . self::getDigitLink($digit) . '*' . self::getDigitLink($row) . '=' . self::getDigitLink($row * $digit) . "</span>";

            echo "</div>\n";

        }

        echo "</div>\n";

    }

    static private function getDigitLink($number)
    {


        if (gettype($number) === 'integer' and $number > 0 and $number < 10) {

            return "<a class='digit-link' href='?picked-digit=$number'>$number</a>";

        } else {
            return $number;
        }

    }

}

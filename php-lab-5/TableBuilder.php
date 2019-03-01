<?php


class TableBuilder
{
    static function buildMultiplicationTable() {

        echo "<table>\n";

        for ($row = 1; $row <= 9; $row++) {

            echo "<tr>\n";

            for ($col = 1; $col <= 9; $col++) {

                echo "<td>";

                echo $row * $col;

                echo "</td>\n";

            }

            echo "</tr>\n";
        }

        echo "</table>\n";
    }

}


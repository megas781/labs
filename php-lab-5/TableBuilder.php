<?php


class TableBuilder
{
    static function buildMultiplicationTable() {

        echo "<table>\n";

        for ($row = 1; $row <= 9; $row++) {

            echo "<tr>\n";

            for ($col = 1; $col <= 9; $col++) {

                if ($row === 1 or $col === 1) {
                    echo "<td class='td_title'>";
                } else {
                    echo "<td>";
                }



                echo $row * $col;

                echo "</td>\n";

            }

            echo "</tr>\n";
        }

        echo "</table>\n";
    }

    static function buildMultiplicationTableWithDivs() {

        echo "<div class='column'>\n";

        for ($row = 1; $row <= 9; $row++) {

            echo "<div class='row'>\n";

            for ($col = 1; $col <= 9; $col++) {

                echo "<div class='_flex-centering'>";

                echo $row * $col;

                echo "</div>\n";

            }

            echo "</div>\n";
        }

        echo "</div>\n";
    }

}


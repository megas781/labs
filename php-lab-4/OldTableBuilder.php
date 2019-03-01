<?php

class OldTableBuilder
{

    static function buildTableWith($string, $columnNumber, $tableTitle)
    {

        echo "<h2>$tableTitle</h2>";

        $tds = array_map(function ($string) {
            return explode('*', $string);
        }, explode('#', $string));


        echo "<table>\n";
        for ($trIndex = 0; $trIndex < count($tds); $trIndex++) {

            echo "<tr>\n";
            for ($tdIndex = 0; $tdIndex < $columnNumber; $tdIndex++) {

                if ($tdIndex < count($tds[$trIndex])) {

                    echo "<td>" . $tds[$trIndex][$tdIndex] . "</td>";

                } else {
                    echo "<td>[empty]</td>";
                }
            }
            echo "</tr>\n";
        }
        echo '</table>';
    }

}

?>
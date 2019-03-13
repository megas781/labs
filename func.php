<?php


function printSolution($v1, $v2) {

//    return 17 * (pow($v1, 2) + pow($v2, 2)) + $v1 + $v2;
    echo "w($v1, $v2) = " . '16 * ('.pow($v1, 2).'+ ' . pow($v2, 2).') + ' . pow($v1, 2).' + ' . pow($v2, 2).' + ' . $v1 . ' + ' . $v2 . ' = ' . (17 * (pow($v1, 2) + pow($v2, 2)) + $v1 + $v2) . '<br>';

}
function printSolutionSimple($v1, $v2) {

//    return 17 * (pow($v1, 2) + pow($v2, 2)) + $v1 + $v2;
    echo $v1 . ' ' . $v2 . ' ' . ((17 * (pow($v1, 2) + pow($v2, 2)) + $v1 + $v2) % 10) . "<br>";

}

//echo 'w(1, 2) =' . printSolution(1, 2) . '<br>';
//echo 'w(1, 7) =' . printSolution(1, 7) . '<br>';
//echo 'w(1, 8) =' . printSolution(1, 8) . '<br>';
//echo 'w(1, 9) =' . printSolution(1, 9) . '<br>';
//echo 'w(2, 3) =' . printSolution(2, 3) . '<br>';
//echo 'w(2, 7) =' . printSolution(2, 7) . '<br>';
//echo 'w(2, 9) =' . printSolution(2, 9) . '<br>';
//echo 'w(3, 4) =' . printSolution(3, 4) . '<br>';
//echo 'w(3, 6) =' . printSolution(3, 6) . '<br>';
//echo 'w(3, 9) =' . printSolution(3, 9) . '<br>';
//echo 'w(4, 5) =' . printSolution(4, 5) . '<br>';
//echo 'w(4, 6) =' . printSolution(4, 6) . '<br>';
//echo 'w(4, 7) =' . printSolution(4, 7) . '<br>';
//echo 'w(5, 6) =' . printSolution(5, 6) . '<br>';
//echo 'w(6, 7) =' . printSolution(6, 7) . '<br>';
//echo 'w(6, 8) =' . printSolution(6, 8) . '<br>';
//echo 'w(6, 9) =' . printSolution(6, 9) . '<br>';
//echo 'w(7, 9) =' . printSolution(7, 9) . '<br>';
//echo 'w(8, 9) =' . printSolution(8, 9) . '<br>';

//printSolution(1, 2);
//printSolution(1, 7);
//printSolution(1, 8);
//printSolution(1, 9);
//printSolution(2, 3);
//printSolution(2, 7);
//printSolution(2, 9);
//printSolution(3, 4);
//printSolution(3, 6);
//printSolution(3, 9);
//printSolution(4, 5);
//printSolution(4, 6);
//printSolution(4, 7);
//printSolution(5, 6);
//printSolution(6, 7);
//printSolution(6, 8);
//printSolution(6, 9);
//printSolution(7, 9);
//printSolution(8, 9);


printSolutionSimple(1, 2);
printSolutionSimple(1, 3);
printSolutionSimple(1, 5);
printSolutionSimple(1, 8);
printSolutionSimple(2, 3);
printSolutionSimple(2, 4);
printSolutionSimple(2, 6);
printSolutionSimple(2, 7);
printSolutionSimple(2, 8);
printSolutionSimple(3, 4);
printSolutionSimple(3, 7);
printSolutionSimple(4, 5);
printSolutionSimple(4, 6);

?>
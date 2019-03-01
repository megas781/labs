<?php

function getAccordingToTime($link1, $link2) {

    $secondModulus = date('s') % 2;

    return $secondModulus === 0 ? $link1 : $link2;

}

?>
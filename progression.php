<?php

$start = $_POST['progStart'];
$end = $_POST['progEnd'];
$step = $_POST['progStep'];
$sum = 0;

function progression($start, $end, $step){
    for($i = $start; $i < $end+1; $i = $i + $step) {
        echo "$i ";
    }
}

progression($start, $end, $step);
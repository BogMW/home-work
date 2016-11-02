<?php

$start = $_POST['progStart'];
$end = $_POST['progEnd'];
$step = $_POST['progStep'];
$sum = 0;

function progression($start, $end, $step){
    if ($start < $end+1) {
        echo "$start ";
        return progression($start+$step, $end, $step);
    }
};

progression($start, $end, $step);
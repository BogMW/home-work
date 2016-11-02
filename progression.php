<?php

$start = $_POST['progStart'];
$end = $_POST['progEnd'];
$step = $_POST['progStep'];
$sum = 0;

if($step <= 0) {
    echo "Крок не може бути меншич чи дорівнювати 0";
    return;
}
if($start > $end) {
    echo "Початкове значення не може бути більше ніж кінцеве";
    return;
}

function progression($start, $end, $step){
    if ($start < $end+1) {
        echo "$start ";
        return progression($start+$step, $end, $step);
    }
};

progression($start, $end, $step);
<?php

function getSum(...$numbers){
    $sum = 0;

    foreach($numbers as $number){
        $sum += $number;
    }

    return $sum;
}

$sum = 0;
$sum += getSum(10,20,30,40,50);
echo $sum .PHP_EOL;
$sum += getSum(10,20,30,40,50);
echo $sum .PHP_EOL;
$sum += getSum(10,20,30,40,50);
echo $sum .PHP_EOL;
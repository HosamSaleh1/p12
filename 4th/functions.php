<?php

$math = 100;
$arabic = 95;
$english = 80;
$physics = 75;
$chemistry = 99;

// echo calcuatePercentage($chemistry,$math,$english,$arabic,$physics) .'<br>';

// i/ps , o/p
function calcuatePercentage ($chemistry,$math,$english,$arabic,$physics) {
    $total = $chemistry + $math + $english + $arabic + $physics;
    $percentage = ($total / 500) * 100;
    return $percentage . ' % ';
}

// no i/p , no o/p 
function calcuatePercentageV2 () {
    $math = 100;
    $arabic = 95;
    $english = 80;
    $physics = 75;
    $chemistry = 99;
    $total = $chemistry + $math + $english + $arabic + $physics;
    $percentage = ($total / 500) * 100;
    echo $percentage;
}

// calcuatePercentageV2();


// no i/p , has o/p 
function calcuatePercentageV3 () {
    $math = 40;
    $arabic = 35;
    $english = 10;
    $physics = 0;
    $chemistry = 99;
    $total = $chemistry + $math + $english + $arabic + $physics;
    $percentage = ($total / 500) * 100;
    return $percentage;
}

// $percentage =  calcuatePercentageV3();

// if($percentage > 50){
//     echo "success";
// }else{
//     echo "fail";
// }


// has i/p , no o/p 
function calcuatePercentageV4 ($chemistry,$math,$english,$arabic,$physics) {
    $total = $chemistry + $math + $english + $arabic + $physics;
    $percentage = ($total / 500) * 100;
    echo $percentage;
}

// $percentage = calcuatePercentageV4(0,20,100,60,0);
// if($percentage > 50){
//     echo "success";
// }else{
//     echo "fail";
// }


// echo calcuatePercentageV4(0,20,100,60,0);


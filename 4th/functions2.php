<?php
declare(strict_types = 1);

function printName () {
    echo "galal";
    return 'ok';
    echo " husseny";
}
// echo printName();
// $gender = 'm';

function checkGender ($gender) {
    if($gender == 'f'){
        return 'female';
    }
    return 'male';
}

// echo checkGender($gender);


// function test($x,$y,$z)
// {
//     return $x+$y+$z;
// }

// echo test(1,2,2);


function getSum ($number1 = 0,$number2 = 0,$number3 = 0) {
    $sum = $number1+$number2+$number3;
    return $sum;
}

// echo getSum(1,2,3);


// function getSumV2 ($number1,$number2 = 0,$number3 = 0) {
//     $sum = $number1+$number2+$number3;
//     return $sum;
// }

// echo getSumV2(2,3);

// function getSumV3 (float $number1 = 0,float $number2 = 0,float $number3 = 0) :int{ 
//     $sum = $number1+$number2+$number3;
//     return $sum;
// }

// echo getSumV3(15.1,10.5,10.9);
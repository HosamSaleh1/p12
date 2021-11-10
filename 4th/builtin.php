<?php
declare(strict_types = 1);
$array = [1,2,3,4,5];

echo count($array);

// i/p => $array
// o/p => count

function countNTI(array $array) {
    $counter = 0;
    foreach ($array as $key => $value) {
        $counter ++;
    }
    return $counter;
}
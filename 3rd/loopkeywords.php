<?php

$arrayOfNames = ['esraa','ahmed','mohamed','3omar','rehab','alaa','mohamed'];


// foreach ($arrayOfNames as  $value) {
//    if($value != 'mohamed'){
//         echo $value . '<br>';
//    }
// }


// foreach ($arrayOfNames as  $value) {
//     if($value == 'mohamed'){
//          break;
//     }
//     echo $value . '<br>';
//  }

foreach ($arrayOfNames as $index => $value) {
    if($index % 2 == 0){
        continue;
    }
    echo $value . '<br>';
}

// flag
// if(condition){
//     $x = true;
// }


// if($x == true){

// }
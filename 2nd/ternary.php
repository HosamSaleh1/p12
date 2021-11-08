<?php
// (condition) ? true:false  

// $gender = 'f';
$gender = 'm';
$salary = 1500;

echo ($gender == 'f' ? 'female' : 'male');
if($gender == 'f'){
    echo 'female';
}else{
    echo 'male';
}

// if($gender == 'f'){
//     if($salary > 1000){
//         echo "rich girl";
//     }else{
//         echo "poor girl";
//     }
// }else{
//     if($salary > 1000){
//         echo "rich man";
//     }else{
//         echo "poor man";
//     }
// }

// echo ($gender == 'f' ? ( $salary > 1000 ? 'rich girl' : 'poor girl') :  ( $salary > 1000 ? 'rich boy' : 'poor boy'));

<?php

// function x (){
//     $args = func_get_args();
//     print_r($args);
// }

// x(1,2,3,'sss','gg','esraa');

$arrayOfNames = ['ahmed','mohamed'];

array_push($arrayOfNames,'islam','galal');
array_unshift($arrayOfNames,'rehab','sara');
array_pop($arrayOfNames);
array_shift($arrayOfNames);
array_splice($arrayOfNames,1,2,['esraa','ebthal']);
array_splice($arrayOfNames,2,0,['alaa']);
print_r($arrayOfNames);


// $allowedExtensions = ['png','jpg','jpeg'];
// $uploadedPhoto = 'png';
// if(in_array($uploadedPhoto,$allowedExtensions)){
// 	echo "Correct Extension";
// }else{
// 	echo "Wrong Extension";
// }
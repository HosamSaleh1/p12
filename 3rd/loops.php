<?php

$arrayOfNames = ['esraa','ahmed','mohamed','3omar','rehab','alaa'];

$count = count($arrayOfNames);
$lastIndex = $count - 1;
// echo $count;



// for
// for(intial;condition;step){
//     body
// }
// for ($i=0; $i <= $lastIndex; $i++) { 
//     echo $arrayOfNames[$i]  . '<br>';
// }

// for ($i=$lastIndex; $i >= 0; $i--) { 
//     echo $arrayOfNames[$i]  . '<br>';
// }

//example => echo hello 5 times
// intial = 1
// end = 5
// step = 1
// for($counter = 1;$counter <= 5;$counter++){
//     echo "hello $counter<br>";
// }


// while

// intial 
// while(condition){
//     body
//     step
// }
// $intial = $lastIndex;
// while($intial >= 0){
//     echo $arrayOfNames[$intial]  . '<br>';
//     $intial--;
// }


// dowhile
// intial 
// do {
//     body 
//     step
// }while(condition);

// $intial = $lastIndex;
// do {
//     echo $arrayOfNames[$intial]  . '<br>';
//     $intial--;
// }while($intial <= 0);


// foreach

$iArray = ['ahmed','mohamed'];
$aArray = ['first'=>'ahmed','second'=>'mohamed'];
$object = (object)['first'=>'ahmed','second'=>'mohamed'];

// foreach (array|object AS $var1){

// }
// foreach ($object as $x) {
//     echo $x . '<br>';
// }

// foreach (array|object AS $var1=>$var2){
    
// }

// foreach ($object as $property => $value) {
//     echo $property . ' ===>>> ' .$value . '<br>';
// }
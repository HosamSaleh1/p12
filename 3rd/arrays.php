<?php
 // indexed array (index-value)
// $indexedArray = ['esraa',5,FALSE,NULL,6.4,[],(object)[]];
// $indexedArray = array('esraa',5,FALSE,NULL,6.4,[],(object)[]);
$users = ['esraa','ebthal','ahmed','hossam','alaa'];
$count = count($users);
// echo $count;
$lastIndex = $count -1;
// echo '<br>'.$lastIndex;

// print_r($users[5]); // how to get an element
// $firstUser = $users[0];
$users[5] = 'galal'; // set value
$users[6] = 'rehab';
$users[1] = 'eslam'; // edit value
$users[10] = 'mohamed';
$users[9] = '3omr';
$users[-1] = 'hossam';
// print_r($users);




// associative array (key-value)
$product = [
    'name'=>'laptop',
    'price'=>2500,
    'quantity'=>5,
    'name'=>'accessories'
];
$product['name'] = 'mobile'; // edit
$product['desc'] = 'detailssssss'; // add 
$product['name'] = 't-shirt';
// print_r($product['name']); // get value
// print_r($product);

// $_POST['price'];


// object (property-value)
$userObject = (object)[
    'id'=>5,
    'name'=>'eslam',
    'class'=>'A',
    'age'=>25,
    'name'=>'ahmed'
];
$userObject->gender = 'male'; // add
$userObject->age = 26; // edit
print_r($userObject); // get value

?>


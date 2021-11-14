<?php

class mobile {
    public $brand;
    public $color;
    public function welcome()
    {
        echo "welcome from $this->brand <br>"; // pseudo variable => refer to current object
    }

    public function getColor()
    {
        return $this->color .'<br>';
    }

    public function getBrand()
    {
        return $this->brand.'<br>';
    }

    public function getMobile()
    {
        return $this;
    }
}

$apple = new mobile;

$apple->brand = 'apple';
$apple->color = 'red';
$apple->welcome();


$samsung = new mobile;

$samsung->brand = 'Samsung';
$samsung->color = 'black';
$samsung->welcome();

// echo $apple->getColor();
// echo $samsung->getColor();

// echo $apple->getBrand();
// echo $samsung->getBrand();

print_r($apple->getMobile());
print_r($samsung->getMobile());


// object => access class scope into global scope
// $this => access properties , methods into class scope


?>

<?php

class mobile {
    public $model;
    public $color;
    public $camera;
    public function makeCalls()
    {
        echo $this->model.'<br>';;
    }

    public function takePhotos()
    {
        
    }
    public const x = 10;
    public static $x = 5;
}

class samsung  extends mobile{
    public const x = 20;
    public static $x = 2;
    public function fingerPrint()
    {
       
    }
}

class apple extends samsung { 

    public function faceID()
    {
       
    }
}
// echo mobile::x.'<br>';
// echo samsung::x.'<br>';
echo mobile::$x.'<br>';
echo samsung::$x.'<br>';
// echo apple::$x.'<br>';

$mobile = new mobile;
$mobile->model = 'mobile';
$mobile->makeCalls();

$samsung = new samsung;
$samsung->model = 'samsung';
$samsung->makeCalls();


$apple = new apple;
$apple->model = 'apple';
$apple->makeCalls();
// parent

// child

// php single inheritance


// class a {

// }

// class b extends a {

// }

// class c extends a {

// }


// class d extends c  {

// }
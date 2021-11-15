<?php 


class mobile {
    public function __construct() {
        echo "mobile start<br>";
    }

    public function welcome()
    {
        echo "welcome from mobile<br>";
    }

    public function __destruct () {
        echo "mobile end<br>";
    }
}


class tv {
    public function __construct() {
        echo "tv start<br>";
    }

    public function welcome()
    {
        echo "welcome from tv<br>";
    }

    public function __destruct () {
        echo "tv end<br>";
    }
}
class x {
    public function __construct() {
        echo "x start<br>";
    }

    public function welcome()
    {
        echo "welcome from x<br>";
    }

    public function __destruct () {
        echo "x end<br>";
    }
}

$tv = new tv;
$tv->welcome();
$x = new x;
$x->welcome();
$mobile = new mobile;
$mobile->welcome();
// $ff = new tv;
// echo "hello";
<?php 


// class x {
//     public $property;
//     public function method1()
//     {
//        $this->method2();
//     }
//     public function method2()
//     {
//        echo "method2";
//     }
// }

// $x = new x;
// $x->method1();
// refer to object
// refer to class
// static => refer to class
class wallet {
    public $balance;
    public const bonus = 50; // refer to class
    public function getBonus()
    {
        // return wallet::bonus;
        return self::getDate();
    }

    public static $date = '14-11-2021';
    public static function getDate()
    {
        // return wallet::$date;
        return self::$date;
    }
    // static; 
}

$esraa = new wallet;

// print_r($esraa);

// echo wallet::bonus .'<br>'; // :: double colon , scope resolution operator

// echo $esraa->getBonus();

// echo wallet::$date .'<br>';

// echo wallet::getDate();
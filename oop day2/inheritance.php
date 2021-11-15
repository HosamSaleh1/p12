<?php


class person {
    public $email;
    public $password;

    public final function login()
    {
        echo "$this->email & $this->password <br>";
    }

    public static function printMe()
    {
        echo "print person";
    }
}


class user extends person {

}


class admin extends person {
    public $phone;

    // public function login()
    // {
    //     echo "$this->phone & $this->password <br>";
    // }
    public static function printMe()
    {
        echo "print admin";
    }

    public static function helper()
    {
        // self::printMe();
        // person::printMe();
        parent::printMe();
    }
}
admin::helper();
// 
// $user = new user;
// $user->email = 'glala.husseny@gmail.com';
// $user->password = 123456;
// $user->login();

// $admin = new admin;
// $admin->phone = '01000498488';
// $admin->password = 123456;
// $admin->login();
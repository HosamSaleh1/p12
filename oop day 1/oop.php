<?php

// $property; => var
// method, => function
// access modifiers => privacy => (public , protected , private)
class user {
    public function x () {
        $x = '5';

        return $x;
    }
    public $name = 'x';
}

// object
$menna = new user;
print_r($menna->x());

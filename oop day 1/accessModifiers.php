<?php

// public (global scope,  chlid scope , class scope)
// protected (chlid scope , class scope)
// private ( class scope )

class x {
    protected $test = 'test';
    public function printProperty()
    {
       echo $this->test;
    }
}

class y extends x {
    public function newFunc()
    {
        echo $this->test;
    }
}

$x = new x;
// print_r($x);
// echo $x->test; // global scope

$y = new y;
// $y->newFunc(); // chlid scope

// $x->printProperty(); // class scope
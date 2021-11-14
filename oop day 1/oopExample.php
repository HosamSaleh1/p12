<?php
class car {
    public $model = 2021;
    public $brand;
    public $color;

    public function start()
    {
        echo "start";
    }

    public function drive()
    {
        echo "drive";
    }
    public function reverse()
    {
        echo "reverse";
    }

    public function stop()
    {
        echo "stop";
    }

}

$bmw = new car;
// print_r($bmw);
$bmw->brand = 'bmw';
$bmw->color = 'black';
print_r($bmw);

$mercides = new car;
$mercides->color = 'red';
print_r($mercides);

$verna = new car;
$verna->model = 2020;
$verna->color = 'yellow';
print_r($verna);
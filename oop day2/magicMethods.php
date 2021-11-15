<?php

class database {

    public function __construct() {
        echo "connection<br>";
    }
    public function getUsers()
    {
        echo "all users<br>";
    }
    public function getProducts()
    {
        echo "all products<br>";
    }

    public function test()
    {
        $this->__construct();
    }
}

$data = new database;

$data->getProducts();

$data->getusers();

$data->test();
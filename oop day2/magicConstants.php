<?php

class magic {
    public function test()
    {
        
        echo __LINE__;
    }
}

$magic = new magic;

$magic->test();

// absolute path , relative path
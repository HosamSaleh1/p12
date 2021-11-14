<?php


class paint {
    public $color;

    public function increaseBlack()
    {
       $this->color .= ' + black';
       return $this;
    }

    public function increaseWhite()
    {
        $this->color .= ' + white';
        return $this;
    }
}


$bmw = new paint;
$bmw->color = 'red';
echo $bmw->increaseBlack()->increaseBlack()->increaseWhite()->increaseBlack()->color; // 'red + black + black + white + black'
// print_r($bmw->color);
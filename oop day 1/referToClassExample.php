<?php 

class userWallet {
    public $balance = 0;
    public const bonus = 50;

    public function getBalance()
    {
       return $this->balance .'<br>';
    }

    public function deposite($depositeBalance)
    {
        $this->balance += $depositeBalance;
    }

    public function withDraw($withDrawBalance)
    {
        $this->balance -= $withDrawBalance;
    }

    public function addBonusToBalance()
    {
       $this->balance += self::bonus;
    }
}

$user = new userWallet;
$user->addBonusToBalance(); // 50
echo $user->getBalance(); 

$user->deposite(200); //250
echo $user->getBalance(); 

$user->withDraw(200); // 50
echo $user->getBalance();
<?php

use userWallet as GlobalUserWallet;

class generalWallet {
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

class userWallet extends generalWallet {

}

$user = new userWallet;
$user->deposite(200);
$user->addBonusToBalance();
echo $user->getBalance() .'<br>';



class employeeWallet extends generalWallet {
    public const bonus = 200;
    // 200 => 180
    public function deposite($depositeBalance)
    {
        $tax = $depositeBalance * 0.1;
        $totalAfterTax = $depositeBalance - $tax;
        $this->balance += $totalAfterTax;
    }
    public function addBonusToBalance()
    {
       $this->balance += self::bonus;
    }
}

$employee = new employeeWallet;
$employee->deposite(200);
$employee->addBonusToBalance();
echo $employee->getBalance();
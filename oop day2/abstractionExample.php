<?php
// concrete method
abstract class operation
{
    abstract protected function login();
    abstract public function logout();
    abstract public function register();
    public function FunctionName()
    {
        # code...
    }
}



class user extends operation
{
    public function login()
    {
        echo  "email & password";
    }
    public function logout()
    {
        echo  "user logout";
    }
    public function register()
    {
        echo  "name & email & password & confrim password";
    }
}

class admin extends operation {
    public function login()
    {
        echo  "phone & password";
    }
    public function logout()
    {
        echo  "admin logout";
    }
    public function register()
    {
        echo  "name & phone & password & confrim password";
    }
}



<?php

interface operations
{
    function login();
    function logout();
    function register();
}
interface crud
{
    // create read update delete
    function create();
    function read();
    function update();
    function delete();
}

class user implements operations, crud
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
    function create()
    {
    }
    function read()
    {
    }
    function update()
    {
    }
    function delete()
    {
    }
}

class admin implements operations
{
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

// echo operations::x;

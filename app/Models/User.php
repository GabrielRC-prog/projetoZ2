<?php

namespace App\Controllers;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer 
{
    public function __construct()
    {
        parent::__construct("users", ["username", "password", "email"], "user_id", true);
    }
}
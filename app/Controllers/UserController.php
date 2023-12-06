<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        //echo 'user login page';
        return view ('users/login');
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LoginUsersController extends BaseController
{
    public function index()
    {
        return view("frontend/auth/login_users.php");
    }
}

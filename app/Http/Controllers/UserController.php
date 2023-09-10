<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController
{
    public function indexRegister() {
        return Inertia::render('Auth/RegisterPage', []);
    }

    public function indexLogin()
    {
        return Inertia::render('Auth/LoginPage', [
        ]);
    }
}

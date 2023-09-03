<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class WallController
{
    public function index()
    {
        return Inertia::render('Wall/WallPage', []);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class GiftController
{
    public function index() {
        return Inertia::render('Menu/Gift/GiftPage', []);
    }
}

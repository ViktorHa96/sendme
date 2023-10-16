<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class GiftSubController
{
    public function index($category) {
        return Inertia::render('Menu/Gift/GiftSubPage', [
            'category' => $category
        ]);
    }
}

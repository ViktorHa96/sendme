<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogController
{
    public function index() {
        return Inertia::render('Menu/Blog/BlogPage', []);
    }
}

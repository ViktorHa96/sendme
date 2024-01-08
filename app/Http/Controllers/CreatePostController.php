<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CreatePostController
{
    public function create(Request $request)
    {
        return Inertia::render('Menu/CreatePost/CreatePostPage', []);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class GalleryController
{
    public function index() {
        return Inertia::render('Menu/Gallery/GalleryPage', []);
    }
}

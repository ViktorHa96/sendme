<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class InstructionController
{
    public function index() {
        return Inertia::render('Menu/Instruction/InstructionPage', []);
    }
}

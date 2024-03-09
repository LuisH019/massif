<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fichaController extends Controller
{
    public function index()
    {
        return view('home.fichaPaciente');
    }
}

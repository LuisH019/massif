<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class HomeController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::orderBy("id","DESC")->paginate();
        return view('home.admin.index',compact('pacientes'));
    }
}

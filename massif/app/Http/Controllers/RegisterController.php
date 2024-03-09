<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function show()
{
 return view('auth.register');
}

public function register(Request $request)
{
    User::create([
        'nome' => $request->nome,
        'email' => $request->email,
        'password' => $request->password,
    ]);

    return redirect('/');
}
}

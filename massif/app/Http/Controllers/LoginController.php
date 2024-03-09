<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Auth\Middleware\AuthenticateUsers;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }
    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();
        
        if(!Auth::validate($credentials)) {
            return redirect()->to('/')->withErrors(trans('auth.failed'));
        }
        
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);

        return $this->authenticated($request, $user);
    }
    
    protected function authenticated(Request $request, $user)
    {

        if(Auth::user()->role_as == '1')
        {
              return redirect('admin/home'); 
        }
        else if(Auth::user()->role_as == '0')
        {
            return redirect()->route('home.index');
        }
        else{
            return redirect('/');
        }
        
    }


}

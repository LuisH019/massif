<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
{
 return true;
}
public function rules()
{
 return [
 'email' => 'required|email:rfc,dns|unique:users,email',
 'name' => 'required|min:3',
 'password' => 'required|min:3',
 'password_confirmation' => 'required|same:password'
 ];
}
}

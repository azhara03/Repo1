<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use\App\Web\Controllers\Controller;
class LoginController extends Controller
{
    public function login(Request $request){

        if(Auth::check()){
            return redirect()->intended(default: 'user.private');
        }

        $formFields = $request->only(['email', 'password']);

        if(Auth::attempt($formFields)){
            return redirect()->intended(default: 'user.private');
        }

        return redirect(route(name: 'user.login'))->withErrors([
            'email'=>'Не удалось авторизоваться'
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\MainController;

use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function save(Request $request){

        if(Auth::check()){
            return redirect('user./project1/resources/views/private.blade.php');
        }
        $validateFields = $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $user=User::create($validateFields);
        if($user){
            Auth::login($user);
            return redirect('user./project1/resources/views/private.blade.php');
        }

        return redirect('user./project1/resources/views/registration.blade.php')->withErrors([
            'formError'=>'Произошла ошибка при сохранении пользователя'
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view(view: '/project1/resources/views/home.blade.php');
    }

    public function logout(){
        Auth::logout();
        return redirect( to: '/project1/resources/views/login.blade.php');
    }

    public function review(){
        return view(view: '/project1/resources/views/review.blade.php');
    }

    public function review_check(Request $request){
        
        $valid = $request->validate([
            'email'=>'required|min:4|max:100',
            'subject'=>'required|min:4|max:100',
            'message'=>'required|min:15|max:300',
        ]);
    }
}

<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function __construct(){
        $this->middleware('guest')->except('destroy');
    }

    public function create(){
        return view('auth.login.create');
    }

    public function store(Request $request){

        if(! auth()->attempt(request(['email','password']))){
            return redirect()->back()->withErrors('no bueno')->withInput();
        }

        return redirect('/admin/dashboard');

    }

    public function destroy(){
        auth()->logout();
        return redirect(route('login'));
    }
}

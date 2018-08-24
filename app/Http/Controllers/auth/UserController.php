<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function create(){
        return view('auth.users.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name'          =>  'required|min:2|max:20',
            'email'         =>  'required|email',
            'password'      =>  'required|min:6|max:20|confirmed'
        ]);

        $data['password'] = bcrypt($data['password']);
        User::create($data);

        session()->flash('message', 'You have successfully registered an account!');
        return redirect('/auth/login');

    }
}

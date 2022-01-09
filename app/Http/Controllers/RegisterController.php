<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        # create user
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:3|unique:users,username',
            // 'username' => ['required','max:255','min:3',Rule::unique('users','username')],
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:7|max:255'
        ]);

        // $attributes['password'] = bcrypt($attributes['password']);

        $user = User::create($attributes);

        // success registration msg
        // session()->flash('success','Your account has been created');

        // login the created user
        auth()->login($user);

        return redirect('/')->with('success','Your account has been created');
    }
}

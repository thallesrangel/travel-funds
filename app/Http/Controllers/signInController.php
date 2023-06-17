<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class signInController extends Controller
{
    public function index()
    {
        return view('public.signin');
    }

    public function validation(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'max:255'],
            'password' => ['required', 'max:255']
        ],
        [
            'required'  => 'Campo obrigatório.'
        ]);

        $user = Users::where('email', $request->email)->first();
        
        if (isset($user) && password_verify($request->password, $user->password)) {
            session()->put('user', $user);

            return redirect()->route('dashboard');
        } else {
            return redirect()->route('public.signIn')->with('error', 'Email ou senha incorreto');
        };
    }
}

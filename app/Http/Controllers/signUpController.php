<?php

namespace App\Http\Controllers;

use App\Models\Agencies;
use App\Models\User;
use Illuminate\Http\Request;

class signUpController extends Controller
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    public function index()
    {
        return view('public.signup');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'document' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required']
        ],
        [
            'required'  => 'Campo obrigatório.',
            'unique'    => 'Já está sendo utilizado.'
        ]);

        try {
            $this->userModel->name = $request->name;
            $this->userModel->document = $request->document;
            $this->userModel->email = $request->email;
            $this->userModel->password = password_hash($request->password, PASSWORD_ARGON2ID);;
            $this->userModel->user_type_id = 2; // Default Agency
            $this->userModel->agency_id = NULL;
            $this->userModel->created_at = now();
            $this->userModel->save();
        } catch (\Exception $e) {
            return redirect()->route('sign.up')->with('error', 'Ocorreu um erro. Verifique os campos.');
        }
        
        return redirect()->route('public.signIn')->with('success', 'Registrado com sucesso.');
    }
}

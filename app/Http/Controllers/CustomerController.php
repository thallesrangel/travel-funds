<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('dashboard.customer.list');
    }

    public function create()
    {
        return view('dashboard.customer.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'birth' => ['required', 'string', 'max:10'],
            'sex' => ['required', 'string', 'max:1'],
            'email' => ['required', 'string', 'max:15'],
            'contact_number' => ['required', 'string', 'max:30'],
            'nationality' => ['nullable', 'string', 'max:150'],
            'document' => ['required', 'string', 'max:15'],
            'passport' => ['nullable', 'string', 'max:20'],
            'passport_emission' => ['nullable', 'string', 'max:20'],
            'passport_expiration' => ['nullable', 'string', 'max:20'],
            
            'location_state' => ['nullable', 'string', 'max:2'],
            'location_city' => ['nullable', 'string', 'max:255'],
            'location_district' => ['nullable', 'string', 'max:255'],
            'location_street' => ['nullable', 'string', 'max:255'],
            'location_number' => ['nullable', 'string', 'max:255'],
            'location_complement' => ['nullable', 'string', 'max:255'],
            'notes' => ['nullable', 'string', 'max:255']
        ],
        [
            'required'  => 'Campo obrigatório',
            'unique'    => 'Já está sendo utilizado',
            'max' => "Limite atingido"
        ]);
 
        try {
            
        } catch (\Exception $e) {
            // return redirect()->route('workspace.create')->with('error', 'Ocorreu um erro. Verifique os campos.');
        }
        
        // return redirect()->route('workspace')->with('success', 'Registrado com sucesso.');
    }
}

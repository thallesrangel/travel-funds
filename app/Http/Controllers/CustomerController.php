<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    private $customersModel;

    public function __construct()
    {
        $this->customersModel = new Customers();
    }

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
            'email' => ['required', 'string', 'max:255'],
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
            'description' => ['nullable', 'string', 'max:255']
        ],
        [
            'required'  => 'Campo obrigatório',
            'unique'    => 'Já está sendo utilizado',
            'max' => "Limite atingido"
        ]);
        
        try {
            $this->customersModel->agency_id = session('user.id');
            $this->customersModel->full_name = $request->full_name;
            $this->customersModel->birth = \Carbon\Carbon::createFromFormat('d/m/Y', $request->birth)->toDateString();
            $this->customersModel->sex = $request->sex;
            $this->customersModel->email = $request->email;
            $this->customersModel->contact_number = $request->contact_number;
            $this->customersModel->nationality = $request->nationality;
            $this->customersModel->document = $request->document;
            $this->customersModel->passport = $request->passport;
            $this->customersModel->passport_emission = isset($request->passport_emission) ? \Carbon\Carbon::createFromFormat('d/m/Y', $request->passport_emission)->toDateString() : NULL;
            $this->customersModel->passport_expiration = isset($request->passport_expiration) ? \Carbon\Carbon::createFromFormat('d/m/Y', $request->passport_expiration)->toDateString() : NULL;
            $this->customersModel->location_state = $request->location_state;
            $this->customersModel->location_city = $request->location_city;
            $this->customersModel->location_district = $request->location_district;
            $this->customersModel->location_street = $request->location_street;
            $this->customersModel->location_number = $request->location_number;
            $this->customersModel->location_complement = $request->location_complement;
            $this->customersModel->description = $request->description;
            $this->customersModel->created_at = now();
            $this->customersModel->save();
        } catch (\Exception $e) {
            return redirect()->route('customer.create')->with('error', 'Ocorreu um erro. Verifique os campos.');
        }
        
            return redirect()->route('customer')->with('success', 'Registrado com sucesso.');
    }
}

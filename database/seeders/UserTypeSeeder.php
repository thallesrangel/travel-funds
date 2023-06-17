<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_type')->insert([
            [
                'label' => 'Administrador',
                'role' => 'admin',
            ],
            [
                'label' => 'Agência',
                'role' => 'agency',
            ],
            [
                'label' => 'Agente',
                'role' => 'agent',
            ]
        ]);
    }
}
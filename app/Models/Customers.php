<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $table = 'customers';
    protected $with = ['agency'];
    
    protected $fillable = [
        'full_name',
        'birth',
        'sex',
        'email',
        'contact_number',
        'nationality',
        'document',
        'passport',
        'passport_emission',
        'passport_expiration',
        'location_state',
        'location_city',
        'location_district',
        'location_street',
        'location_number',
        'location_complement',
        'description',
    ];

    public function agency()
    {
        return $this->belongsTo(Users::class, 'agency_id', 'id');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $table = 'users';
    protected $with = ['userType', 'agency'];

    protected $fillable = [
        'name',
        'document',
        'email',
        'password',
        'email_verified_at',
    ];

    protected $hidden = [
        'password',
    ];
    
    public function userType()
    {
        return $this->belongsTo(UserType::class, 'id_user_type', 'id');
    }

    public function agency()
    {
        return $this->belongsTo(Users::class, 'agency_id', 'id');
    }
}
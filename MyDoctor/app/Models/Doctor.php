<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticate;

class Doctor extends Authenticate
{
    use Notifiable;

    protected $guard = 'doctor';

    protected $fillable = [
        'fiscal_code', 'name', 'surname', 'email', 'gender', 'dob', 'phone_number', 'id_building', 'password',
 
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function prescriptions()
    {
        return $this->hasMany('App\Models\Prescription');  //un dottore ha molte ricette (N:1)
    }
}
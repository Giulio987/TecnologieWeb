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
        return $this->hasMany('App\Models\Prescription', 'id_doctor');  //un dottore ha molte ricette (N:1)
    }

    public function admins()
    {
        return $this->belongsTo('App\Models\Admin', 'id_admin');
    }
    /*public function buildings()
    {
        return $this->belongsTo('App\Models\Buildings', 'id_building');  //una prescrizione appartiene a un paziente
    }*/
}
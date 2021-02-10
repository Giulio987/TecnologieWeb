<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fiscal_code', 'name', 'surname', 'email', 'dob', 'gender', 'phone_number', 'street_address', 'street_number', 'postal_code', 'city', 'id_doctor', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function prescriptions()
    {
        return $this->hasMany('App\Models\Prescription', 'id_user');  //un paziente ha molte ricette (N:1)
    }
    public function admins()
    {
        return $this->belongsTo('App\Models\Admin', 'id_admin');  //una prescrizione appartiene a un paziente
    }

}

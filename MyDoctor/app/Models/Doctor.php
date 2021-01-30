<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticate;

class Doctor extends Authenticate
{
    use Notifiable;
    protected $guard = 'doctor';
    protected $fillable = [
        'name', 'surname', 'email', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
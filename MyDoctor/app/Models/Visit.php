<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable = [

        'id_user', 'id_doctor', 'date', 'time',

    ];

}

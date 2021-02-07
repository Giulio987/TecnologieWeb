<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    protected $fillable = [
        'rfe', 'id_user', 'id_doctor', 'description', 'status', 'date', 'type',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');  //una prescrizione appartiene a un paziente
    }

}

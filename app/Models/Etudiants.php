<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiants extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'date_naissance',
        'ville_id'
    ];

    public function ville()
    {
        return $this->belongsTo(Villes::class);
    }

    public function etudiants()
    {
        return $this->hasMany(Etudiants::class);
    }
}

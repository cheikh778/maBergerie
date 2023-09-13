<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mouton extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'race',
        'genealogie',
        'photo',
        'taille',
        'poids',
        'prix',
        'date_de_naissance',
        'proprietaire_id'
    ];

    public function proprietaire()
    {
        return $this->belongsTo(User::class, 'proprietaire_id');
    }

}

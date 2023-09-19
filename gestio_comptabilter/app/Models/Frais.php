<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frais extends Model
{
    use HasFactory;
    protected $table = 'frais';
    protected $fillable = [
        'montant',
        'type',
        'etudiant_id',
    ];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }
}

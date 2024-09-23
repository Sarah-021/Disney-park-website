<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
    use HasFactory;
    protected $table = 'rides'; // Nom de la table dans la base de données

    // Relation avec le type de manège
    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }

    // Relation avec le parc
    public function park()
    {
        return $this->belongsTo(Park::class, 'park_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $table = "types";
    protected $primaryKey = "id";
    protected $keyType = 'int';

    //fonction inverse si besoin 
    public function rides()
    {
        return $this->hasMany(Attraction::class, 'type_id');
    }
}

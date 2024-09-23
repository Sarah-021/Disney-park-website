<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    use HasFactory;
    protected $table = "rides";
    protected $keyType = 'int';
    protected $primaryKey = "id";
    public $incrementing = true;

    //fonction inverse si besoin plus tard
    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }

    //fonction inverse si besoin plus tard
    public function park()
    {
        return $this->belongsTo(park::class, 'park_id');
    }
}
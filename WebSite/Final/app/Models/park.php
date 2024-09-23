<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class park extends Model
{
    use HasFactory;
    protected $table = "parks";
    protected $keyType = 'string';
    protected $primaryKey = "id";
    public $incrementing = false;

    public function destinations()
    {
        return $this->belongsTo(Destination::class, 'destination_id');
    }
    public function rides()
    {
        return $this->hasMany(Attraction::class, 'park_id');
    }
}

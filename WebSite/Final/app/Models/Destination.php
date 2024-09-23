<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{

    protected $table = "destinations";
    protected $keyType = 'string';
    protected $primaryKey = "id";
    public $incrementing = false;
    public function parks()
    {
        return $this->hasMany(park::class, 'destination_id');
    }

}
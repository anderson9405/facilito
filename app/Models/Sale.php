<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'user_id',
    ];

    //Relaciones

    public function records(){
        return $this->hasMany('App\Models\Record');
    }
}

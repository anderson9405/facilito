<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'brand',
        'price',
        'image',
        'stock',
        'slide',
        'category_id',
        'user_id',
    ];

    //Relaciones
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function records(){
        return $this->hasMany('App\Models\Record');
    }

}

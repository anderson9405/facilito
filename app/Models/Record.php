<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'quantity',
        'sale_id',
        'product_id',
    ];

    //Relaciones

    public function product(){
        return $this->belongsTo('App\Models\Product');
    }

    public function transaction(){
        return $this->belongsTo('App\Models\Transaction');
    }
    
}

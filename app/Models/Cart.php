<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'cart';

    protected $fillable = [
        'id_user',
        'id_product',
        'jumlah',
        'total_price'
    ];

    public function products() {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'order_detail';
    
    protected $fillable = [
        'id_order',
        'id_product',
        'jumlah'
    ];

    public function products() {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }
}

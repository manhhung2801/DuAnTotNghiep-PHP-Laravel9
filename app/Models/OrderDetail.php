<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'order_details';
    protected $fillable = [
        'product_name',
        'variants',
        'price',
        'qty',
        'order_id',
        'product_id',
        'created_at',
        'update_at'
    ];
    
    public function Product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'Orders';
    protected $filable = [
        'order_name',
        'orderphone',
        'order_email',
        'order_province',
        'order_district',
        'order_ward',
        'order_address',
        'total',
        'qty_total',
        'payment_method',
        'payment_status',
        'shipping_method',
        'coupon',
        'order_status',
        'admin_note',
        'user_note',
        'user_id',
        'created_at',
        'updated_at'
    ];
    public function order_detail()
    {
        return $this->hasMany(Order_detail::class, 'order_id', 'id');
    }
    static function getOrderUser($id) {
        return self::where('user_id', '=', $id);
    }

    static function getOrder($id) {
        return self::findOrFail($id);
    }
}

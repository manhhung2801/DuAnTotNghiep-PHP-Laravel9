<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'order_name',
        'vnp_order_code',
        'vnp_transaction_id',
        'vnp_bank_code',
        'vnp_refund_status',
        'order_phone',
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
    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');
    }
    static function getOrderUser($id) {
        return self::where('user_id', '=', $id);
    }

    static function getOrder($id) {
        return self::findOrFail($id);
    }
    static function getOrderAll() {
        return self::query();
    }


}

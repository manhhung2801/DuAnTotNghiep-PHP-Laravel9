<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coupons extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'coupons';
    protected $fillable = [
        'id', 'name', 'code', 'quantity',
        'max_use', 'start_date', 'end_date',
        'discount_type', 'discount', 'status',
        'total_used','deleted_at',
    ];
    



    static public function getCoupons()
    {
        return self::orderBy('id', 'desc')->paginate(15);
    }
    // get 1 record by id
    static public function getCouponsItem($id)
    {
        return self::findOrFail($id);
    }

    static public function getCouponsTrashed()
    {
        return self::onlyTrashed()->orderBy('deleted_at', 'desc')->paginate(15);
    }

    static public function destroyTrashedItem($id)
    {
        return self::withTrashed()->where('id', $id)->forceDelete();
    }
    static public function restoreTrashed($id) {
        return self::withTrashed()->where('id', $id)->restore();
    }

}

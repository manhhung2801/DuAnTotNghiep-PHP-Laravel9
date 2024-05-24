<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StoreAddress extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'store_addresses';
    static public function getStoreAddressTrashed(){
        return self::onlyTrashed()->orderBy('deleted_at','desc')->paginate(15);
    }
    static public function destroyTrashedItem($id)
    {
        return self::withTrashed()->where('id', $id)->forceDelete();
    }
    static public function restoreTrashed($id) {
        return self::withTrashed()->where('id', $id)->restore();
    }
}

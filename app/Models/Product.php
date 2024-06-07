<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'products';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function childCategory()
    {
        return $this->belongsTo(ChildCategory::class);
    }
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
    //get all record
    static public function getProduct()
    {
        return self::orderBy('id', 'desc');
    }
    // get 1 record by id
    static public function getProductItem($id)
    {
        return self::findOrFail($id);
    }
    static public function getProductTrashed()
    {
        return self::onlyTrashed()->orderBy('deleted_at', 'desc');
    }
    static public function destroyTrashedItem($id)
    {
        return self::withTrashed()->where('id', $id)->forceDelete();
    }
    static public function restoreTrashed($id)
    {
        return self::withTrashed()->where('id', $id)->restore();
    }
}

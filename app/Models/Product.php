<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'slug',
        'image',
        'qty',
        'price',
        'offer_price',
        'offer_start_date',
        'offer_end_date',
        'sku',
        'video_link',
        'long_description',
        'short_description',
        'specifications',
        'product_type',
        'status',
        'seo_title',
        'seo_description',
        'category_id',
        'weight',
        'views',
        'sub_category_id',
        'child_category_id',
        'deleted_at',
        'created_at',
        'updated_at',
    ];
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

    public function product_image_galleries()
    {
        return $this->hasMany(product_image_galleries::class, 'product_id', 'id');
    }

    public function variant()
    {
        return $this->hasMany(Variant::class, 'product_id');
    }

    public function ProductHasOneCat()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}

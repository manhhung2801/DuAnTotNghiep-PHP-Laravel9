<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'status',
        'deleted_at',
        'created_at',
        'updated_at',
    ];
    
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function childCategory() {
        return $this->hasMany(ChildCategory::class, "sub_category_id", "id");
    }

    public function products() {
        return $this->hasMany(Product::class, "sub_category_id");
    }

    static public function getCategoryTrashed()
    {
        return self::onlyTrashed()->orderBy('deleted_at', 'desc')->paginate(15);
    }

    static public function destroyTrashed($id)
    {
        return self::withTrashed()->where('id', $id)->forceDelete();
    }
    static public function restoreTrashed($id) {
        return self::withTrashed()->where('id', $id)->restore();
    }
}

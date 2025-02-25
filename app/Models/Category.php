<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'categories';
    protected $fillable = ['name', 'alias', 'hidden', 'featured', 'meta_keyword', 'meta_description'];
    public function subCategories() {
        return $this->hasMany(SubCategory::class, 'category_id', 'id');
    }

    public function products() {
        return $this->hasMany(Product::class, "category_id");
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

    static public function getCategory() {
        return self::where('status', '=', 1)->orderBy('rank', 'asc');
    }
}

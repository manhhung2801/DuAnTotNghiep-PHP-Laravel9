<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

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
    static public function getProduct()
    {
        return self::orderBy('id', 'desc')->paginate(15);
    }
    static public function getProductItem($id) {
        return self::findOrFail($id);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;
    protected $table = 'variant';
    public $primaryKey = 'id';
    public $fillable = ['product_id', 'name', 'status', 'created_at', 'updated_at',];

    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public function variantItem()
    {
        return $this->hasMany(VariantItem::class, 'product_variant_id', 'id');
    }
}

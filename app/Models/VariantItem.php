<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VariantItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'variant_items';
    public $primaryKey = 'id';
    protected $fillable = [
        'id',
        'product_variant_id',
        'name',
        'price',
        'is_default',
        'status',
    ];

    protected $casts = [
        'is_default' => 'boolean',
    ];

    public function variant()
    {
        return $this->belongsTo(Variant::class, 'product_variant_id');
    }

    public function product()
    {
        return $this->variant->product;
    }

    public function getDiscountedPriceAttribute()
    {
        $discount = $this->product->discount;
        return $this->price * (1 - $discount);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
}

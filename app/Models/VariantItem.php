<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VariantItem extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $table = 'variant_items';

    protected $fillable = [
        'product_variant_id',
        'name',
        'price',
        'is_default',
        'status',
    ];

    // Các phương thức, quan hệ và logic khác trong model
    public function Variant()
    {
        return $this->hasOne(Variant::class, 'id', 'product_variant_id');
    }

}

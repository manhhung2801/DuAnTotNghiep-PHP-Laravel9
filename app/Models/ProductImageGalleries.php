<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImageGalleries extends Model
{
    use HasFactory;
    protected $table = 'product_image_galleries';
    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
    
}

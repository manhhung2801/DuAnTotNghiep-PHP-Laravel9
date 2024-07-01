<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_image_galleries extends Model
{
    use HasFactory;

      public function post()
    {
        return $this->hasOne(Product::class, 'id', 'post_id');
    }
}

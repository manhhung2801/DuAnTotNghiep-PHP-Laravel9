<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    use HasFactory,SoftDeletes;
     protected $table='posts';
     public $primaryKey = 'id';
     public $fillable = ['category_id','user_id','image','title','slug','description','seo_title','seo_description','status','created_at','updated_at',];

    public function Post_categories()
    {
        return $this->hasOne(Post_categories::class, 'id', 'category_id');
    }

       public function User()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}


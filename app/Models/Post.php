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
     public $fillable = ['category_id','user_id','image','title','content','slug','description','seo_title','seo_description','type','status','created_at','updated_at',];

    public function Post_categories()
    {
        return $this->hasOne(Post_categories::class, 'id', 'category_id');
    }

       public function User()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    static function getPost() {
        return self::where('status', '=', 1);
    }
    static public function destroyTrashedItem($id)
    {
        return self::withTrashed()->where('id', $id)->forceDelete();
    }
}


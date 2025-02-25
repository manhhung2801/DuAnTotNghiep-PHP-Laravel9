<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'posts';
    public $primaryKey = 'id';
    public $fillable = ['category_id', 'user_id', 'image', 'title', 'content', 'slug', 'description', 'seo_title', 'seo_description', 'type', 'status', 'created_at', 'updated_at',];

    public function Post_categories(): HasOne
    {
        return $this->hasOne(Post_categories::class, 'id', 'category_id');
    }

    public function User()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    static public function getPostTrashed()
    {
        return self::onlyTrashed()->orderBy('deleted_at', 'desc')->paginate(15);
    }
    static public function restoreTrashed($id)
    {
        return self::withTrashed()->where('id', $id)->restore();
    }
    static function getPost()
    {
        return self::where('status', '=', 1)->where('type', '=', 0)->orderBy('created_at', 'desc');
    }
    static function getBanner()
    {
        return self::where('status', '=', 1)->where('type', '=', 1)->orderBy('created_at', 'desc');
    }
    static public function destroyTrashedItem($id)
    {
        return self::withTrashed()->where('id', $id)->forceDelete();
    }
}

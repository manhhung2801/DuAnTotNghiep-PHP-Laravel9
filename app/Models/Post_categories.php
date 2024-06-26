<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post_categories extends Model
{
    use HasFactory,SoftDeletes;
    protected $table='posts_categories';
    public $primaryKey = 'id';
    public $fillable = ['name','slug','status','created_at','updated_at',];

 
    public function posts():HasMany
    {
        return $this->hasMany(Post::class, 'category_id', 'id');
    }
}

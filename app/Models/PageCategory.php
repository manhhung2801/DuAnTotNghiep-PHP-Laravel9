<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class PageCategory extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'page_categories';
    public function pages()
    {
        return $this->hasMany(Page::class);
    }
    static public function getPageCategoryTrashed()
    {
        return self::onlyTrashed()->orderBy('deleted_at', 'desc')->paginate(15);
    }
    static public function destroyTrashedItem($id)
    {
        return self::withTrashed()->where('id', $id)->forceDelete();
    }
    static public function restoreTrashed($id)
    {
        return self::withTrashed()->where('id', $id)->restore();
    }
}

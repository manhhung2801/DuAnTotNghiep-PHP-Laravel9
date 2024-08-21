<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'pages';
    public function pageCategory()
    {
        return $this->belongsTo(PageCategory::class, "page_category_id");
    }
    static public function getPageTrashed()
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

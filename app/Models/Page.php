<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $table = 'pages';
    public function pageCategory()
    {
        return $this->belongsTo(PageCategory::class, "page_category_id");
    }
}

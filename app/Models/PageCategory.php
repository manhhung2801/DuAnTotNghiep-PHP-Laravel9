<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageCategory extends Model
{
    use HasFactory;
    protected $table = 'page_categories';
    public function page()
    {
        return $this->hasMany(Page::class);
    }
}

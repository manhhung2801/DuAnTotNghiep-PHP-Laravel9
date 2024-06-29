<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;
    protected $table = 'information';
    public function SubInformation()
    {
        return $this->hasMany(SubInformation::class, 'information_id', 'id');
    }
    public function pages()
    {
        return $this->hasMany(Page::class, "information_id");
    }
}

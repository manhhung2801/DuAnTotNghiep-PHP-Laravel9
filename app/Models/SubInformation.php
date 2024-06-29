<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubInformation extends Model
{
    use HasFactory;
    protected $table = 'sub_information';
    public function information()
    {
        return $this->belongsTo(Information::class);
    }
    public function pages()
    {
        return $this->hasMany(Page::class, "sub_information_id");
    }
}

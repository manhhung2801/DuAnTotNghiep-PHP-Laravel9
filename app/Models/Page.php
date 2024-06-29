<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $table = 'pages';
    public function information()
    {
        return $this->belongsTo(Information::class);
    }
    public function subInformation()
    {
        return $this->belongsTo(SubInformation::class);
    }
}

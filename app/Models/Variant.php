<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;
    protected $table='variant';
    public $primaryKey = 'id';
    public $fillable = ['product_id','name','status','created_at','updated_at'];
}

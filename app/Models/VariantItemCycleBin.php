<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VariantItemCycleBin extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'variant_item_recycle_bin';
}

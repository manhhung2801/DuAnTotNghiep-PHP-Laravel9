<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class contact extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'contacts';
    protected $fillable = [
        'id', 'user_id', 'name', 'email', 'phone', 'content', 'feedback'
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, "user_id", 'id');
    }

    static public function getContact()
    {
        return self::orderBy('id', 'desc')->paginate(15);
    }
    // get 1 record by id
    static public function getContactItem($id)
    {
        return self::findOrFail($id);
    }

    static public function getContactTrashed()
    {
        return self::onlyTrashed()->orderBy('deleted_at', 'desc')->paginate(15);
    }

    static public function destroyTrashedItem($id)
    {
        return self::withTrashed()->where('id', $id)->forceDelete();
    }
    static public function restoreTrashed($id) {
        return self::withTrashed()->where('id', $id)->restore();
    }


}

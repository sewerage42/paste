<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paste extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'text',
        'status',
        'user_id',
        'link',
        'short_link',
        'expired_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

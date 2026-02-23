<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokument_user_log extends Model
{
    use HasFactory;
    protected $table = 'dokument_user_log';
    protected $guarded = [];

    public function dokument()
    {
        return $this->belongsTo(Dokument::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
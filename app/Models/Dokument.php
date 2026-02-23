<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokument extends Model
{
    use HasFactory;
    protected $table = 'dokument';
    protected $guarded = [];

    public function dokument_jenis()
    {
        return $this->belongsTo(Dokument_jenis::class, 'dokument_jenis_id');
    }

    public function dokument_group()
    {
        return $this->belongsTo(Dokument_group::class, 'dokument_group_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
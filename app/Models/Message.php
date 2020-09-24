<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $tabel = ['messages'];

    protected $fillable = [
        'name', 'email', 'telepon', 'message',
    ];

    protected $hidden = [];
}

<?php

namespace App\Models;

use App\Models\Ad;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'name',
    ];
    protected $hidden = [];

    public function ad()
    {
        return $this->hasMany(Ad::class, 'categories_id');
    }

    public function category()
    {
        return $this->belongsTo(User::class, 'categories_id');
    }
}

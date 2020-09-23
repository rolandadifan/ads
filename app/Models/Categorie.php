<?php

namespace App\Models;

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
}

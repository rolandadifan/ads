<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ad extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'users_id', 'categories_id', 'tittle', 'slug', 'price', 'year', 'sdescription', 'description', 'status', 'city', 'photo1', 'photo2', 'photo3',
    ];

    protected $hidden = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function categories()
    {
        return $this->belongsTo(Categorie::class, 'categories_id', 'id');
    }

    public function getphoto1Attribute($value)
    {
        return url('storage/' . $value);
    }
    public function getphoto2Attribute($value)
    {
        return url('storage/' . $value);
    }
    public function getphoto3Attribute($value)
    {
        return url('storage/' . $value);
    }
}

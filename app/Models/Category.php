<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug'];

    /**
     * Defines One to Many Relation with Animes Table
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function animes()
    {
        return $this->hasMany(Anime::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tag extends Model
{
    protected $fillable = ['name', 'slug'];

    /**
     * Defines Many to Many Relation with Animes Table
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function animes()
    {
        return $this->hasMany(Anime::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    public function movies(): BelongsToMany
    {
        return $this->belongsToMany(Movie::class);
    }


    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    protected $fillable = ['firstName', 'lastName'];

    public function books() : BelongsToMany {
        return $this->belongsToMany(Book::class)->withTimestamps();
    }
}

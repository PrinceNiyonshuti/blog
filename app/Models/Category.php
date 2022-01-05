<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // making the relationship to post table

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}

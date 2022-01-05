<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // 3 ways to allow mass assignment and its vulnerable protection

    protected $fillable = ['title','excerpt','body',];

    // protected $guard =['id'];

    // protected $guard =[];
}

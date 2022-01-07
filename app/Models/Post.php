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

    // Making Eager load

    protected $with=['category','author'];

    // making our query set scope

    public function scopeFilter($query , array $filters)
    {
        // first way to do filter searching
        // if($filters['search'] ?? false){
        //     $query
        //     ->where('title','like','%' . request('search') . '%')
        //     ->orWhere('body','like','%' . request('search') . '%');
        // }

        // the second alternative way

        $query->when($filters['search'] ?? false ,fn($query,$search) =>
        $query
            ->where('title','like','%' . $search . '%')
            ->orWhere('body','like','%' . $search . '%')
        );

    }

    // making the relationship to category table

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}

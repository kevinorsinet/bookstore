<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Category;
use app\Models\Review;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['name','amazon_link','published', 'image', 'description', 'price'];

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function reviews(){
        return $this->belongsToMany(Review::class);
    }
}

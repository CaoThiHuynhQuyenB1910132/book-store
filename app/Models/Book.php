<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_name',
        'description',
        'selling_price',
        'original_price',
        'published_at',
        'stock',
        'book_img',
        'book_slug',
        'author_id',
        'category_id'
    ];

    public function author(){
        return $this->belongsTo(Author::class, 'author_id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function carts(){
        return $this->hasMany(Cart::class);
    }
}

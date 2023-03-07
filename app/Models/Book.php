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
        'img',
        'book_slug'
    ];
}

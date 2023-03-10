<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_name',
        'birth_day',
    ];

    public function book(){
        return $this->hasMany(Book::class, 'author_id');
    }
}

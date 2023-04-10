<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderBook extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'book_id',
        'purchase_price',
        'quantity',
    ];

    public function order(){
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function book(){
        return $this->belongsTo(Book::class, 'book_id');
    }
}

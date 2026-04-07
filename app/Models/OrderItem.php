<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItem extends Model
{
    protected $fillable = ['order_id', 'dish_id', 'quantity', 'price'];

    // This item belongs to a specific order
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    // This item represents a specific dish
    public function dish(): BelongsTo
    {
        return $this->belongsTo(Dish::class);
    }
}
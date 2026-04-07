<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    //
    protected $fillable = ['user_id', 'total_price', 'status'];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user-id');
    }

    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
}

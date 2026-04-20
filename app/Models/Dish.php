<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dish extends Model
{
    //

    use HasFactory; 

    protected $fillable = ['user_id', 'name', 'description', 'price', 'category', 'image', 'is_spicy', 'is_popular',];

    protected $casts = [
        'is_spicy'   => 'boolean',
        'is_popular' => 'boolean',
    ];

    // every dish was created by a specific user (chef)
    public function chef(): BelongsTo 
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

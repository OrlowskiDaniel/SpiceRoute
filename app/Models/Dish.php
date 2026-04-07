<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Add this

class Dish extends Model
{
    //

    use HasFactory; // And this
    protected $fillable = ['user_id', 'name', 'descripton', 'price', 'image'];

    // every dish was created by a specific user (chef)
    public function chef(): BelongsTo 
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

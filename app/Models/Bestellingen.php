<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bestellingen extends Model
{
    use HasFactory;

    protected $fillable = [
        'itemName',
        'price',
        'amount',
        'name',
        'user_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

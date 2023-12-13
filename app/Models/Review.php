<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    use HasFactory;

    protected $table = "review";

    protected $fillable = [
        'user_id',
        'product_id',
        'titel_review',
        'beschrijving_review',
        'rating',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

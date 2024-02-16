<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Achievement extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'user_id'];

    public function users(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
}

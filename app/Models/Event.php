<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'event_naam',
        'event_beschrijving',
        'event_locatie',
        'begin_datum',
        'eind_datum',
        'begin_tijd',
        'eind_tijd',
        'event_foto',
        'event_status',
    ];
}

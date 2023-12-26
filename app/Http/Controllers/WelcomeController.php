<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\Review;

class WelcomeController extends Controller
{
    public function index()
    {
        $reviews = Review::get();
        $events = Event::get();

        return view('welcome', compact('reviews', 'events'));
    }
}

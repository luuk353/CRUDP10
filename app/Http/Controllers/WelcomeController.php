<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Event;
use App\Models\Highscore;
use App\Models\Review;

class WelcomeController extends Controller
{
    public function index()
    {
        $reviews = Review::get();
        $events = Event::get();
        $highscores = Highscore::orderBy('score', 'desc')->get();
        $achievements = Achievement::get();

        return view('welcome', compact('reviews', 'events', 'highscores', 'achievements'));
    }
}

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
        $reviews = Review::orderBy('created_at', 'desc')->limit(6)->get();
        $events = Event::limit(6)->get();
        $highscores = Highscore::orderBy('score', 'desc')->limit(6)->get();
        $achievements = Achievement::orderBy('created_at', 'desc')->limit(6)->get();

        return view('welcome', compact('reviews', 'events', 'highscores', 'achievements'));
    }
}

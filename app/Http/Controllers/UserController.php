<?php

namespace App\Http\Controllers;

use App\Models\Highscore;
use App\Models\Review;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashbord()
    {
        $user = auth()->user();
        $reviews = Review::where('user_id', $user->id)->count();
        $highscores = Highscore::where('user_id', $user->id)->count();


        return view('user/dashboard', compact('reviews', 'highscores'));
    }
}

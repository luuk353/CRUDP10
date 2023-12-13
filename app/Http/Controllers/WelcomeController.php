<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class WelcomeController extends Controller
{
    public function index()
    {
        $reviews = Review::get();

        return view('welcome', compact('reviews'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $reviews = Review::where('user_id', $user->id)->get();

        return view('reviews.index', compact('reviews'));
    }

    public function create()
    {
        return view('reviews.create');
    }

    public function store(ReviewRequest $request)
    {
        $user = auth()->user();

        Review::create([
            'user_id' => $user->id,
            'titel_review' => $request->titel_review,
            'beschrijving_review' => $request->beschrijving_review,
            'rating' => $request->rating,
        ]);

        return redirect()->route('reviews.index');
    }
}

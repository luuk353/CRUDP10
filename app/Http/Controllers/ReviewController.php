<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $reviews = Review::where('user_id', $user->id)->get();

        return view('reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $review = Review::findOrFail($id);

        return view('reviews.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $review = Review::findOrFail($id);

        return view('reviews.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReviewRequest $request, string $id)
    {
        $review = Review::findOrFail($id);
        $review->update($request->all());

        return redirect()->route('reviews.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('reviews.index');
    }
}

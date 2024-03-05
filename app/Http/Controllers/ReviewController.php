<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\User;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $reviews = Review::where('user_id', $user->id)->simplePaginate(10);

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

        $review = new Review($request->all());
        $review->user_id = $user->id;
        $review->save();

        return redirect()->route('reviews.index')->with('success', 'Review succesvol geplaats!');
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

        return redirect()->route('reviews.index')->with('success', 'Succesvol review aangepast!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin = auth()->user()->admin == 1;
        $review = Review::findOrFail($id);
        $review->delete();

        if($admin) {
            return redirect()->route('admin.reviews')->with('destroy', 'Review succesvol verwijderd!');
        }
        else {
            return redirect()->route('reviews.index')->with('destroy', 'Review succesvol verwijderd!');
        }
    }
}

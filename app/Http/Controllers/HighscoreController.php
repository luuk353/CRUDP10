<?php

namespace App\Http\Controllers;

use App\Http\Requests\HighscoreRequest;
use App\Models\Highscore;
use Illuminate\Http\Request;

class HighscoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //highscores van alle users
    public function index()
    {
        $highscores = Highscore::orderBy('score', 'desc')->get();

        return view('highscore.index', compact('highscores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('highscore.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HighscoreRequest $request)
    {
        $user = auth()->user();

        $highscore = new Highscore($request->all());
        $highscore->user_id = $user->id;
        $highscore->save();

        return redirect()->route('highscore.index')->with('success', 'Succesvol highscore geplaatst!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $highscore = Highscore::findOrFail($id);

        return view('highscore.show', compact('highscore'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $highscore = Highscore::findOrFail($id);

        return view('highscore.edit', compact('highscore'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HighscoreRequest $request, string $id)
    {
        $highscore = Highscore::findOrFail($id);
        $highscore->update($request->all());

        return redirect()->route('highscore.index')->with('success', 'Succesvol highscore aangepast!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $highscore = Highscore::findOrFail($id);
        $highscore->delete();

        return redirect()->route('highscore.index')->with('destroy', 'Succesvol highscore verwijderd!');
    }

    //highscores van de ingelogde user
    public function userhighscore()
    {
        $user = auth()->user();
        $highscores = Highscore::where('user_id', $user->id)->orderBy('score', 'desc')->get();

        return view('highscore.userhighscore', compact('highscores'));
    }
}

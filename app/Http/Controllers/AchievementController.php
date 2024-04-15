<?php

namespace App\Http\Controllers;

use App\Http\Requests\AchievementRequest;
use App\Models\Achievement;
use App\Models\User;
use App\Models\UserAchievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $achievements = Achievement::simplePaginate(16);

        return view('achievement.index', compact('achievements'));
    }

    public function myAchievements()
    {
        $user = auth()->user();
        $user_achievements = UserAchievement::where('user_id', $user->id)->get();

        return view('achievement.myachievements', compact('user_achievements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('achievement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AchievementRequest $request)
    {
        $achievement = new Achievement($request->all());
        $achievement->save();

        return redirect()->route('achievements.index')->with('success', 'Succesvol achievement aangemaakt!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $achievement = Achievement::findOrFail($id);
        $user_achievements = UserAchievement::where('achievement_id', $achievement->id)->orderBy('created_at', 'desc')->get();

        return view('achievement.show', compact('achievement', 'user_achievements'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $achievement = Achievement::findOrFail($id);

        return view('achievement.edit', compact('achievement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AchievementRequest $request, string $id)
    {
        $achievement = Achievement::findOrFail($id);
        $achievement->update($request->all());

        return redirect()->route('achievements.index')->with('success', 'Succesvol achievement aangepast!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $achievement = Achievement::findOrFail($id);
        $achievement->delete();

        return redirect()->route('achievements.index')->with('destroy', 'Succesvol achievement verwijderd!');
    }
}

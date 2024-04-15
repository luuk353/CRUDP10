<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\Achievement;
use App\Models\Bestellingen;
use App\Models\Event;
use App\Models\Highscore;
use App\Models\Inventory;
use App\Models\Review;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $admins = User::where('admin', 1)->get();

        return view('admin.indexadmin', compact('admins'));
    }

    public function create()
    {
        return view('admin.createadmin');
    }

    public function store(AdminRequest $request)
    {
        $admin = new User($request->all());
        $admin->admin = 1;
        $admin->save();

        return redirect()->route('admin.index')->with('success', 'Succesvol admin aangemaakt!');
    }

    public function show(string $id)
    {
        $admin = User::findOrFail($id);

        return view('admin.showadmin', compact('admin'));
    }

    //dashboard pagaina van de admin
    public function dashboard()
    {
        $events = Event::count();
        $admins = User::where('admin', 1)->count();
        $achievements = Achievement::count();
        $reviews = Review::count();
        $users = User::where('admin', 0)->count();
        $products = Inventory::count();
        $bestellingen = Bestellingen::count();
        $highscores = Highscore::count();

        return view('admin.dashboard', compact('reviews', 'events', 'admins', 'achievements', 'users', 'products', 'bestellingen', 'highscores'));
    }

    public function edit(string $id)
    {
        $admin = User::findOrFail($id);

        return view('admin.editadmin', compact('admin'));
    }

    public function update(AdminRequest $request, string $id)
    {
        $admin = User::findOrFail($id);
        $admin->update($request->all());

        return redirect()->route('admin.index')->with('success', 'Succesvol admin aangepast!');
    }

    public function destroy(string $id)
    {
        $admin = User::findOrFail($id);
        $admin->delete();

        return redirect()->route('admin.index')->with('destroy', 'Succesvol admin verwijderd!');
    }

    public function reviews()
    {
        $reviews = Review::simplePaginate(16);

        return view('admin.showreviews', compact('reviews'));
    }

    public function destroy_reviews(string $id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('admin.reviews')->with('destroy', 'Succesvol review verwijderd!');
    }
}

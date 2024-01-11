<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\Event;
use App\Models\Review;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

        return redirect()->route('admin.dashboard');
    }

    public function show(string $id)
    {
        $admin = User::findOrFail($id);

        return view('admin.showadmin', compact('admin'));
    }

    //dashboard pagaina van de admin
    public function dashboard()
    {
        $reviews = Review::get()->sortBy('created_at');
        $events = Event::get();

        return view('admin.dashboard', compact('reviews', 'events'));
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

        return redirect()->route('admin.index');
    }

    public function destroy(string $id)
    {
        $admin = User::findOrFail($id);
        $admin->delete();

        return redirect()->route('admin.index');
    }
}

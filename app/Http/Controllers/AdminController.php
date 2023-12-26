<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        if(auth()->user()->admin) {
            return view('admin.dashboard');
        }
        else {
            return redirect()->route('welcome');
        }
    }

    public function dashboard()
    {
        $reviews = Review::get()->sortBy('created_at');

        return view('admin.dashboard', compact('reviews'));
    }
}

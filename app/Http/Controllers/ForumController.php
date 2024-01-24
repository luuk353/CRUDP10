<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ForumPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index()
    {
        $forum = ForumPost::all();
        return view('forum.index', ['forum' => $forum]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request
            ->validate([
                'title' => 'required|string',
                'message' => 'required|string',
            ]);

        $forum = new ForumPost();
        $forum->title = $request->input('title');
        $forum->text = $request->input('message');
        $forum->user_id = Auth::id();

        $forum->save();

        return redirect()->route('forum.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


}

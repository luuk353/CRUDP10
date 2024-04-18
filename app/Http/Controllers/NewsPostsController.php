<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\NewsPost;

class NewsPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = NewsPost::orderBy('created_at')->simplePaginate(4);

        return view('news.index', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsRequest $request)
    {
        // dit laat zien welke admin deze nieuwsblog heeft geschreven
        $geschreven_user = auth()->user();
        $news = new NewsPost($request->all());
        $news->user_id = $geschreven_user->id;
        $news->save();

        return redirect()->route('news.index')->with('success', 'Nieuwsblog succesvol aangemaakt!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $news = NewsPost::findOrFail($id);

        return view('news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = NewsPost::findOrFail($id);

        return view('news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NewsRequest $request, string $id)
    {
        $news = NewsPost::findOrFail($id);
        $news->update($request->all());

        return redirect()->route('news.index')->with('success', 'Nieuws blog succesvol bewerkt!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = NewsPost::findOrFail($id);
        $news->delete();

        return redirect()->route('news.index')->with('destroy', 'Nieuws blog succesvol verwijderd!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Validation\Rule;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');
        $comics = Comic::where('series', 'LIKE', "%$search%")->paginate(3)->withQueryString();
        return view('comics.index', compact('comics', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create', ['comic' => new Comic()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|unique:comics',
            'series' => 'required|string',
            'description' => 'nullable|string',
            'thumb' => 'nullable|url',
            'price' => 'required|string',
            'sale_date' => 'required|date|before_or_equal:today',
            'type' => 'required|in:graphic novel,comic book',
            'artists' => 'required|string',
            'writers' => 'required|string'
        ]);
        if (!str_contains($data['price'], '$')) $data['price'] = '$' . $data['price'];
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();
        return to_route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->validate([
            'title' => ['required', 'string', Rule::unique('comics')->ignore($comic->id)],
            'series' => 'required|string',
            'description' => 'nullable|string',
            'thumb' => 'nullable|url',
            'price' => 'required|string',
            'sale_date' => 'required|date|before_or_equal:today',
            'type' => 'required|in:graphic novel,comic book',
            'artists' => 'required|string',
            'writers' => 'required|string'
        ]);
        if (!str_contains($data['price'], '$')) $data['price'] = '$' . $data['price'];
        $comic->fill($data);
        $comic->save();
        return to_route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index');
    }
}

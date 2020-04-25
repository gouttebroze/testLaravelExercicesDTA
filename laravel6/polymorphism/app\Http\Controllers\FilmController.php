<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\{Film, Category, Actor};
use App\Http\Requests\Film as FilmRequest;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param String $slug
     * @return \Illuminate\Http\Response
     */
    public function index($slug = null)
    {
        $model = null;

        if($slug) {
            if(Route::currentRouteName() == 'films.category') {
                $model = new Category;
            } else {
                $model = new Actor;
            }
        }

        $query = $model ? $model->whereSlug($slug)->firstOrFail()->films() : Film::query();

        $films = $query->withTrashed()->oldest('title')->paginate(5);

        return view('index', compact('films', 'slug'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Film  $filmRequest
     * @return \Illuminate\Http\Response
     */
    public function store(FilmRequest $filmRequest)
    {
        $film = Film::create($filmRequest->all());

        $film->categories()->attach($filmRequest->cats);
        $film->actors()->attach($filmRequest->acts);

        return redirect()->route('films.index')->with('info', 'Le film a bien été créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Film $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        return view('show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Film $film
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {
        return view('edit', compact('film'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Http\Requests\Film  $filmRequest
     * @return \Illuminate\Http\Response
     */
    public function update(FilmRequest $filmRequest, Film $film)
    {
        $film->update($filmRequest->all());

        $film->categories()->sync($filmRequest->cats);
        $film->actors()->sync($filmRequest->acts);

        return redirect()->route('films.index')->with('info', 'Le film a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Film $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        $film->delete();

        return back()->with('info', 'Le film a bien été mis dans la corbeille.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Int $id
     * @return \Illuminate\Http\Response
     */
    public function forceDestroy($id)
    {
        Film::withTrashed()->whereId($id)->firstOrFail()->forceDelete();

        return back()->with('info', 'Le film a bien été supprimé définitivement dans la base de données.');
    }

    /**
     * Restore the specified resource.
     *
     * @param  Int $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        Film::withTrashed()->whereId($id)->firstOrFail()->restore();

        return back()->with('info', 'Le film a bien été restauré.');
    }
}

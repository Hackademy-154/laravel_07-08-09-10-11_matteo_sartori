<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\FilmValidations;

class FilmController extends Controller
{

    public function index()
    {
        $films = Film::all();
        return view("film.index",compact("films"));
    }
    public function revisorIndex()
    {
        $films = Film::all();
        return view("revisor.index",compact("films"));
    }

    public function create()
    {
        return view("film.create");
    }

    public function store(FilmValidations $request)
    {
        $films = Film::create([

            'title'=> $request->title,
            'plot'=> $request->plot,
            'duration'=> $request->duration,
            'img'=> $request->has('img') ? $request->file('img')->store('media','public') : 'media/default.png',
            'user_id'=>Auth::user()->id,
        ]);
        
        return redirect()->route("filmIndex")->with("success","Film inserito correttamente!");
    }

    public function show(Film $film)
    {     
        return view("film.show",compact("film"));

    }


    public function edit(Film $film)
    {
        return view("film.edit",compact("film"));
    }

    public function update(Request $request, Film $film)
    {
        if ($request->img) {
            $film->update([
                'img' => $request->file('img')->store('media', 'public')
            ]);
        }
        $film->update([
            'title' => $request->title,
            'plot' => $request->plot,
            'duration' => $request->duration,
        ]);
        return redirect()->route('film.edit', compact('film'))->with('success', 'Autore modificato correttamente');
    }

    public function destroy(Film $film)
    {
        $film->delete();
        return redirect()->route('revisorIndex')->with('success', "Film $film->title cancellato correttamente");
    }
}

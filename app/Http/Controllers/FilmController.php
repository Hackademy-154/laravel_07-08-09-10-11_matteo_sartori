<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Film;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\FilmValidations;

class FilmController extends Controller
{

    public function index()
    {   
        $categories = Category::all();
        $films = Film::with('categories')->get();;
        return view("film.index",compact("films","categories"));
    }
    public function revisorIndex()
    {
        $films = Film::all();
        return view("revisor.index",compact("films"));
    }

    public function create()
    {
        $categories = Category::all();
        return view("film.create",compact("categories"));
    }

    public function store(FilmValidations $request)
    {
       
        $film = Film::create([
            'title'=> $request->title,
            'plot'=> $request->plot,
            'duration'=> $request->duration,
            'img'=> $request->has('img') ? $request->file('img')->store('media','public') : 'media/default.png',
            'user_id'=>Auth::user()->id,
        ]);

        $film->categories()->sync($request->categories);

        return redirect()->route("filmIndex")->with("success","Film inserito correttamente!");
    }

    public function show(Film $film)
    {     
        return view("film.show",compact("film"));
    }


    public function edit(Film $film)
    {
        $categories = Category::all();
        return view("film.edit", compact("film", "categories"));
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

        if ($request->has('categories')) {
            $film->categories()->sync($request->categories);
        } else {
            $film->categories()->detach();
        }
        return redirect()->route('revisorIndex', compact('film'))->with('success', 'Film modificato correttamente');
    }

    public function destroy(Film $film)
    {
        $film->delete();
        return redirect()->route('revisorIndex')->with('success', "Film $film->title cancellato correttamente");
    }
}

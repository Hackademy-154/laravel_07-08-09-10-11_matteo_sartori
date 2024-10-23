<?php

namespace App\Http\Controllers;

use App\Http\Requests\Validations;
use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index(){
        $films = Film::all();
        return view("index",compact("films"));
    }
    public function create(){
        return view("film_create");
    }
    public function store(Validations $request){
        $films = Film::create([

            'title'=> $request->title,
            'plot'=> $request->plot,
            'duration'=> $request->duration,
            'img'=> $request->has('img') ? $request->file('img')->store('media','public') : 'media/default.png'
        ]);
        return redirect()->route("index")->with("success","Film inserito correttamente!");
    }
}

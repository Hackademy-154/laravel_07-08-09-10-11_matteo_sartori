<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Auth;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage() {
        $films = Film::all();
        return view('welcome', compact('films'));
    }
    public function faq() {
        return view('faq');
    }
    public function login(){
        return view("login");
    }
    public function profile(){
        $user = Auth::user();
        return view("profile", compact("user"));
    }
}

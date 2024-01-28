<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $animes = Anime::with('category')->with('tags')->take(9)->get();
        $animes_slider = $animes->slice(3);
        return view("home.index", ["animes" => $animes, "slider" => $animes_slider]);
    }
}

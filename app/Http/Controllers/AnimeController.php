<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

/**
 *  This controller is used to create logic control for anime model
 */
class AnimeController extends Controller
{
    public function index()
    {
    }
    public function show($slug)
    {
        $anime = Anime::with('category')->with('tags')->whereSlug($slug)->first();
        return view('anime.show', ['anime' => $anime]);
    }
    public function watch($slug)
    {
        $anime = Anime::with('category')->with('tags')->whereSlug($slug)->first();
        return view('anime.watch', ['anime' => $anime]);
    }
}

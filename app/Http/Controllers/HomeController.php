<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

/**
 *  This controller is used to create logic control for Home page
 */
class HomeController extends Controller
{
    /**
     *  This function returns the home page view file and is displayed in frontend
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $animes = Anime::with('category')->with('tags')->take(9)->get(); // gets 9 anime rows from animes table
        $animes_slider = $animes->slice(3); //returns 6 rows
        return view("home.index", ["animes" => $animes, "slider" => $animes_slider]); // returns home view file
    }
}

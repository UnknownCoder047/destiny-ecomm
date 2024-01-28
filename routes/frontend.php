<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, 'index'])->name("home");
Route::group(["prefix" => "animes", "as" => "anime."], function () {
  Route::get('/', [AnimeController::class, 'index'])->name('index');
  Route::get('/watch/{anime}', [AnimeController::class, 'watch'])->name('watch');
  Route::get('/{anime}', [AnimeController::class, 'show'])->name('show');
});

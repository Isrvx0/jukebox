<?php
use App\Http\Controllers\GenreController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\PlaylistController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// to show the genres :
Route::get('/genres', [GenreController::class, 'index'])->name('genres.index');

// to show the songs :
Route::get('/songs', [SongController::class, 'index'])->name('songs.index');

// to show the playlists :
Route::get('/playlists', [PlaylistController::class, 'index'])->name('playlist.index');

// to handles the request to show songs belonging to a genre:
Route::get('/genres/{genreId}', [GenreController::class, 'showSongs'])->name('genres.show');

// to handle the creation of playlists :
Route::get("/playlists/create" , array(PlaylistController::class, "create"))->name("playlists.create");
Route::post("/playlists" , array(PlaylistController::class, "store"))->name("playlists.store");
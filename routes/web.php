<?php

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/createplayer', [PlayerController::class, "createplayer"]);
// Route::post("add_player", [PlayerController::class, "storeplayer"]);

// Route::get('/createteam', [TeamController::class, "createteam"]);
// Route::post("add_team", [TeamController::class, "storeteam"]);


Route::resource('players', PlayerController::class);
Route::resource('teams', TeamController::class);

<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use App\Models\Player;
use App\Models\Team;
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
    $DBTeam = Team::all();
    $DBPlayer = Player::all();
    return view('welcome', compact("DBTeam", "DBPlayer"));
});
Route::get('/dashboard', function () {

    $players = Player::all();
    $teams = Team::all();
    // $DBPhoto = Photo ::all();
    $playersWith = Player::where("team_id", "!=", 1)->get();
    $playersWithout = Player::where("team_id", "=", 1)->get();
    return view ("pages.dashboard", compact("players", "teams", "playersWith", "playersWithout"));
});


// Route::get('/createplayer', [PlayerController::class, "createplayer"]);
// Route::post("add_player", [PlayerController::class, "storeplayer"]);

// Route::get('/createteam', [TeamController::class, "createteam"]);
// Route::post("add_team", [TeamController::class, "storeteam"]);


Route::resource('players', PlayerController::class);
Route::resource('teams', TeamController::class);
// Route::resource('dashboard', DashboardController::class);

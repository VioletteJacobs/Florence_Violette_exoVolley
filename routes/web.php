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

    // Dasboard 1 : team full
    $fullTeam = [];
    foreach ($teams as $item) {

        if (count($players->where('team_id', $item->id)) == $item->max) {
            array_push($fullTeam, $item);
        }
    }
    // Dasboard 4 : Team not full
    $dispoTeam = [];

    foreach ($teams as $item) {
        
        if(count($players->where("team_id", $item->id)) != $item->max){
            array_push($dispoTeam, $item);
        }
    }

    // Team EU
    $euTeams = [];
    $notEuTeams = [];
    $euCountry = ['Austria', 'Belgium', 'Bulgaria', 'Croatia', 'Republic of Cyprus', 'Czech Republic', 'Denmark', 'Estonia', 'Finland', 'France', 'Germany', 'Greece', 'Hungary', 'Ireland', 'Italy', 'Latvia', 'Lithuania', 'Luxembourg', 'Malta', 'Netherlands', 'Poland', 'Portugal', 'Romania', 'Slovakia', 'Slovenia', 'Spain', 'Sweden'];

    foreach ($teams as $team) {
        if(in_array($team->country,  $euCountry)) {
            array_push($euTeams, $team);
        }else{
            array_push($notEuTeams,$team);
        }
    }


     // Empty teams
     $emptyTeam = [];
     foreach ($teams as $item) {
         if (count($players->where('team_id', $item->id)) == 0) {
             array_push($emptyTeam, $item);
         }
     }
    // Player who play for their country
    $patriot = [];
    foreach ($playersWith as $player) {
        if ($player->country == $player->teams->country) {
            array_push($patriot, $player);
        }
    }
    return view ("pages.dashboard", compact("players", "teams", "playersWith", "playersWithout", "euTeams", "notEuTeams", "fullTeam", "emptyTeam", "dispoTeam", "patriot"));
});


// Route::get('/createplayer', [PlayerController::class, "createplayer"]);
// Route::post("add_player", [PlayerController::class, "storeplayer"]);

// Route::get('/createteam', [TeamController::class, "createteam"]);
// Route::post("add_team", [TeamController::class, "storeteam"]);


Route::resource('players', PlayerController::class);
Route::resource('teams', TeamController::class);
// Route::resource('dashboard', DashboardController::class);

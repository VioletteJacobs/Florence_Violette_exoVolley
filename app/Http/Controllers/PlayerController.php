<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $DBTeam = Team::all();
        return view("pages.createplayer",compact("DBTeam"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            "name" => "required|min:1|max:50",
            "firstname" => "required|min:1|max:50",
            "age" => "required|min:1|max:50",
            "phone" => "required|min:1|max:50",
            "email" => "required|min:1|max:50",
            "gender" => "required|min:1|max:50",
            "country" => "required|min:1|max:50",
            "role" => "required|min:1|max:50",
            // "photo" => "required|min:1|max:50",
            // "team" => "required|min:1|max:50",
        ]);

        $storephoto = New Photo;
        $storephoto->url = $request->file("url")->hashName();
        Storage::put("public/img/", $request->file("url"));
        $storephoto->save();

        $newEntry = new Player;
        $newEntry->name = $request->name;
        $newEntry->firstname = $request->firstname;
        $newEntry->age = $request->age;
        $newEntry->phone = $request->phone;
        $newEntry->email = $request->email;
        $newEntry->gender = $request->gender;
        $newEntry->country = $request->country;
        $newEntry->role = $request->role;
        $newEntry->team_id = $request->team_id;
        $newEntry->photo_id = $storephoto->id;



        $team = Team::where('id', $request->team_id)->get();
        $player = Player::where("team_id", $request->team_id)->get();


        if($team[0]->max == sizeOf($player)){
            return redirect()->back()->withErrors(["The team of your choice is full, sorry!"]);
        }else{
            $newEntry->save();
            return redirect("/")->with("status", "thanks, your profil has been saved!");
        };

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Player::find($id);
        return view ("pages.show.showplayer", compact("show"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Player::find($id);
        return view ("pages.edit.updateplayer", compact("edit"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $updatephoto = Photo::find($id);
        Storage::delete('public/img/'.$updatephoto->url);
        $updatephoto->url = $request->file("url")->hashName();
        Storage::put("public/img/", $request->file("url"));
        $updatephoto->save();

        $newEntry = Player::find($id);
        $newEntry->name = $request->name;
        $newEntry->firstname = $request->firstname;
        $newEntry->age = $request->age;
        $newEntry->phone = $request->phone;
        $newEntry->email = $request->email;
        $newEntry->gender = $request->gender;
        $newEntry->country = $request->country;
        $newEntry->role = $request->role;
        $newEntry->team_id = $request->team_id;
        $newEntry->photo_id = $updatephoto->id;
        $newEntry->save();

        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Player::find($id);
        $destroyPhoto = Photo::find($id);
        Storage::delete("public/img/".$destroyPhoto->url);

        $destroy->delete();
        $destroyPhoto->delete();
        return redirect("/");
    }

}

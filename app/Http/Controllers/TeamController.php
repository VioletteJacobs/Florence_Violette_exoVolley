<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
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

        return view("pages.createteam");
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
            "name" => "required|min:2|max:50",
            "city" => "required|min:2|max:50",
            "country" => "required|min:2|max:50",
            "max" => "required|min:1|max:50",

        ]);
        $newEntry = new Team;
        $newEntry->name = $request->name;
        $newEntry->city = $request->city;
        $newEntry->country = $request->country;
        $newEntry->max = $request->max;
        $newEntry->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Team::find($id);
        return view ("pages.show.showteam", compact("show"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $DBTeam = Team::all();
        $edit = Team::find($id);
        return view("pages.edit.updateteam", compact("edit", "DBTeam"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newEntry = Team::find($id);

        $newEntry->name = $request->name;
        $newEntry->city = $request->city;
        $newEntry->country = $request->country;
        $newEntry->max = $request->max;

        $newEntry->save();

        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Team::find($id);
        $destroy->delete();
        return redirect("/");
    }
}

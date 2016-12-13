<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Http\Requests;
use App\Http\Requests\TeamStoreRequest;
use View;
use Auth;
use App\Teamup;

class TeamController extends Controller
{
    public function create()
    {
      return view('team.team-create');
    }

    public function store(Requests\TeamStoreRequest $request)
    {

      $team = Team::create([
        'user_id'=> Auth::User()->id,
        'name' => $request->name,
        'introduction' => $request->introduction
      ]);


      $team->save();

      return redirect()->route('account.myteam');
    }
    public function join($team_id){

      $teamup = Teamup::create([
        'user_id'=> Auth::User()->id,
        'team_id' => $team_id
      ]);

      $teamup->save();
    }
}

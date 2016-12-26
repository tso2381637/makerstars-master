<?php

namespace App\Http\Controllers;

use App\User;
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
    public function search(Request $request){
        $error = ['error' => 'error'];
        if($request->has('q')){
            $posts = User::where('name',$request->get('q'))->get();

            return $posts-count();
        }
        return $error;
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
    public function get_user($name){

        }
}

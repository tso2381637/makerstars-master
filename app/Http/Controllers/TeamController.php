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
        $error = ['error' => 'No results found'];
        if($request->has('q')){
            $posts = User::search($request->get('q'))->paginate(5);

            return $posts->count() ? $posts : $error;
        }
        else {
            return $error;
        }
        }
    public function store(Requests\TeamStoreRequest $request)
    {
      $team = Team::create([
        'user_id'=> Auth::User()->id,
        'name' => $request->name,
        'introduction' => $request->introduction
      ]);
        $team->save();
      $teamup = Teamup::create([
          'user_id' => Auth::User()->id,
          'team_id' => $team->id
      ]);
        $teamup->save();
     for($i=0;$i<count($request->users);$i++){
          $teamup = Teamup::create([
          'user_id' => User::where('name',$request->users[$i])->pluck('id')->first(),
              'team_id'=>$team->id
              ]);
        $teamup->save();
    }


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

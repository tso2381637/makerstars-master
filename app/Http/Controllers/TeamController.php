<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TeamController extends Controller
{
    public function create()
    {
      return view('team.team-create');
    }
    public function store(requests\TeamStoreRequest $request)
    {
      this.validate($request,[
        'teamname' => 'required',
        'member' => 'required',
        'introduce' => 'required'
      ]);

    }
}

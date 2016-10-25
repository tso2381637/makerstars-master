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
    public function store()
    {

    }
}

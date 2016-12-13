<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Team;
class AccountController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	return view('accounts.settings');
    }

    public function activity()
    {
    	return view('accounts.activity');
    }

    public function wishlist()
    {
    	return view('accounts.wishlist');
    }

    public function resume()
    {
        return view('accounts.resume');
    }
		public function myteam()
		{
				$teams = Team::where('user_id',Auth::User()->id)->get();
				return view('accounts.myteam')->with('teams' , $teams);
		}
}

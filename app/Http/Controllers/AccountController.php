<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use Image;
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

    public function avatar_update(Request $request)
    {
        if($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(150,150)->save(public_path('img/info/').$filename);
            $user = Auth::user();
            $user->avatar =  $filename;
            $user->save();
        }
        return back();
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

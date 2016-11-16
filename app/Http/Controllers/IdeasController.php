<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\IdeaRequest;

use App\Idea;
use View;
use Auth;
class IdeasController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category_id)
    {
        if($category_id==0){
        $ideas = Idea::orderBy('created_at', 'desc')->simplepaginate(6);

        return View::make('team-up')->with('ideas' , $ideas)->with('category_id',$category_id);
        }
        else{
        $ideas = Idea::where('category_id','=',$category_id)->orderBy('created_at', 'desc')->simplepaginate(6);

        return View::make('team-up')->with('ideas' , $ideas)->with('category_id',$category_id);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $this->middleware('auth');
        return view('ideas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(requests\IdeaRequest $request)
    {
        $idea = Idea::create($request->except('_token'));
        $idea->user_id=Auth::User()->id;
        $idea -> save();
        //dd($request);

        return redirect()->route('team-up',0);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $idea = Idea::find($id);

        return View::make('show')->with('idea',$idea);
    }
    public function leader($id)
    {

        $idea = Idea::find($id);

        return View::make('teamleader')->with('idea',$idea);
    }

    public function member($id)
    {

        $idea = Idea::find($id);

        return View::make('member')->with('idea',$idea);
    }
    public function forumview($id)
    {

        $idea = Idea::find($id);

        return View::make('forumview')->with('idea',$idea);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

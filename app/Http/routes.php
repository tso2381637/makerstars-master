<?php
use Illuminate\Support\Facades\Redis;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('test',function(){
  $data = [
      'events' => 'event1',
      'data'=>[
        'name' => 'Eason'
      ]
  ];

  Redis::publish('test-channel',json_encode($data));

  return view('welcome');
});

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('about', ['as' => 'about', 'uses' => 'AboutController@index']);

Route::get('account', ['as' => 'account', 'uses' => 'AccountController@index']);
Route::get('account/settings', ['as' => 'account.settings', 'uses' => 'AccountController@index']);
Route::post('account/avatar_update', ['as' => 'avatar.update' , 'uses' => 'AccountController@avatar_update']);
Route::get('account/activity', ['as' => 'account.activity', 'uses' => 'AccountController@activity']);
Route::get('account/wishlist', ['as' => 'account.wishlist', 'uses' => 'AccountController@wishlist']);
Route::get('account/myteam', ['as' => 'account.myteam', 'uses' => 'AccountController@myteam']);
Route::get('account/resume', ['as' => 'account.resume', 'uses' => 'AccountController@resume']);
Route::post('process', ['as' => 'Auth.process' , 'uses' => 'Auth\AuthController@process']);
Route::get('signup', ['as' => 'signup', 'uses' => 'SignUpController@index']);

Route::get('forum', ['as' => 'forum', 'uses' => 'ForumController@index']);

Route::get('team-up/{category_id}', ['as' => 'team-up', 'uses'=>"IdeasController@index"]);

Route::get('auth/{authname}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{authname}/callback', 'Auth\AuthController@handleProviderCallback');

Route::get('ideas',            ['as' => 'ideas.index',         'uses' => 'IdeasController@index']);
Route::get('ideas/create',     ['as' => 'ideas.create', 'middleware' => 'auth' ,'uses' => 'IdeasController@create']);
Route::post('ideas',           ['as' => 'ideas.store',   'uses' => 'IdeasController@store']);
Route::get('ideas/{id}',       ['as' => 'ideas.show',    'uses' => 'IdeasController@show']);
Route::get('ideas/leader/{id}',['as' => 'ideas.leader',  'uses' => 'IdeasController@leader']);
Route::get('ideas/member/{id}',['as' => 'ideas.member',  'uses' => 'IdeasController@member']);
Route::get('ideas/forumview/{id}',['as' => 'ideas.forumview',  'uses' => 'IdeasController@forumview']);
Route::get('ideas/{id}/edit',  ['as' => 'ideas.edit',    'uses' => 'IdeasController@edit']);
Route::patch('ideas/{id}',     ['as' => 'ideas.update',  'uses' => 'IdeasController@update']);
Route::delete('ideas/{id}',    ['as' => 'ideas.destroy', 'uses' => 'IdeasController@destroy']);

Route::get('team/create',      ['as' =>'team.create',  'middleware' => 'auth' ,'uses' => 'TeamController@create']);
Route::get('team/create/search',['as' => 'team.create.search' , 'uses' => 'TeamController@search']);
Route::post('team',            ['as' =>'team.store' ,'uses' => 'TeamController@store']);
Route::get('team/join/{team_id}'  ,      ['as' => 'team.join' ,'uses' => 'TeamController@join']);
// 使用「社群認證」需再裝 Laravel Socialite
// Socialite 目前支援 Facebook、Twitter、LinkedIn、Google、GitHub 跟 Bitbucket。
// 詳見：https://laravel.tw/docs/5.1/authentication#social-authentication

// 認證路由...
//Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout');

// 註冊路由...
// Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::auth();

// Route::get('/home', 'HomeController@index');

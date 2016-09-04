<?

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

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('about', ['as' => 'about', 'uses' => 'AboutController@index']);

Route::get('account', ['as' => 'account', 'uses' => 'AccountController@index']);
Route::get('account/settings', ['as' => 'account.settings', 'uses' => 'AccountController@index']);
Route::get('account/activity', ['as' => 'account.activity', 'uses' => 'AccountController@activity']);
Route::get('account/wishlist', ['as' => 'account.wishlist', 'uses' => 'AccountController@wishlist']);
Route::get('account/resume', ['as' => 'account.resume', 'uses' => 'AccountController@resume']);
Route::post('process', ['as' => 'Auth.process' , 'uses' => 'Auth\AuthController@process']);
Route::get('signup', ['as' => 'signup', 'uses' => 'SignUpController@index']);

// Route::get('forum', ['as' => 'forum', 'uses' => 'ForumController@index']);

Route::get('team-up/{category_id}', ['as' => 'team-up', 'uses'=>"IdeasController@index"]);

Route::get('auth/{authname}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{authname}/callback', 'Auth\AuthController@handleProviderCallback');

Route::get('ideas',           ['as' => 'ideas.index',         'uses' => 'IdeasController@index']);
Route::get('ideas/create',    ['as' => 'ideas.create', 'middleware' => 'auth' ,'uses' => 'IdeasController@create']);
Route::post('ideas',          ['as' => 'ideas.store',   'uses' => 'IdeasController@store']);
Route::get('ideas/{id}',      ['as' => 'ideas.show',    'uses' => 'IdeasController@show']);
Route::get('ideas/{id}/edit', ['as' => 'ideas.edit',    'uses' => 'IdeasController@edit']);
Route::patch('ideas/{id}',    ['as' => 'ideas.update',  'uses' => 'IdeasController@update']);
Route::delete('ideas/{id}',   ['as' => 'ideas.destroy', 'uses' => 'IdeasController@destroy']);



// 使用「社群認證」需再裝 Laravel Socialite
// Socialite 目前支援 Facebook、Twitter、LinkedIn、Google、GitHub 跟 Bitbucket。
// 詳見：https://laravel.tw/docs/5.1/authentication#social-authentication

// 認證路由...
//Route::get('auth/login', 'Auth\AuthController@getLogin');
//Route::post('auth/login', 'Auth\AuthController@postLogin');
//Route::get('auth/logout', 'Auth\AuthController@getLogout');

// 註冊路由...
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::auth();

// Route::get('/home', 'HomeController@index');

<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Socialite;
use Auth;
use Redirect;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'loginemail' => 'email|max255|unique:users',
            'loginpassowrd' => ''
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    /**
     * 重導使用者到 Oauth 認證頁。
     *
     * @return Response
     */
    public function redirectToProvider($oauthName)
    {
        if ($this->checkProvider($oauthName))
        {
            return Socialite::driver($oauthName)->redirect();
        }
        else
        {
            return Redirect::to('login');
        }
    }

    /**
     * 確認 $oauthName 對應的 provider 是否存在
     *
     * @return boolean
     */
    private function checkProvider($oauthName)
    {
        //
        // 若要增加其他的 oauth 請記得到 User.php 中的 $fillable = [] 加入新的 oauth
        //
        $providerList = [
            // "github"    => "enable",
            // "facebook"  => "enable",
            "google"    => "enable",
        ];

        // return isset($providerList[$oauthName]); // 若只確認 oauth 是否存在，不確認 `enable`，可使用此方法較快速
        return isset($providerList[$oauthName]) && $providerList[$oauthName] == "enable";
    }

    /**
     * 確認 $email 是否為學校信箱
     *
     * @return boolean
     */
    private function checkEmail($email)
    {
        $emailDomainList = [
            "@nfu.edu.tw"       => "enable",
            "@gm.nfu.edu.tw"    => "enable",
        ];


        foreach ($emailDomainList as $key => $value) {
            if ($value == "enable" && fnmatch("*{$key}", $email)) {
                return true;
            }
        }

        return false;
    }

    /**
     * 從 Oauth 得到使用者資訊
     *
     * @return Response
     */
    public function handleProviderCallback($oauthName)
    {
        try {
            $user = Socialite::driver($oauthName)->user();
        } catch (Exception $e) {
            return Redirect::to("auth/{$oauthName}");
        }

        //
        // 檢查登入的信箱 domain 是否為允許的範圍
        //
        if ($this->checkEmail($user->email)) {
            $authUser = $this->findOrCreateUser($user, $oauthName);
            Auth::login($authUser, true);
            return Redirect::to('/');
        }
        else {
            return Redirect::to('login')->with('message', "很抱歉，登入失敗了！您登入所使用的 gmail 為「{$user->email}」，請使用「@nfu.edu.tw」或「@gm.nfu.edu.tw」的 gmail 進行登入。");
        }
    }

    /**
     * Return user if exists; create and return if doesn't
     *
     * @param $authUser
     * @return User
     */
    private function findOrCreateUser($user, $oauthName)
    {
        if ($authUser = User::where("{$oauthName}_id", $user->id)->first()) {
            return $authUser;
        }

        return User::create([
            "{$oauthName}_id" => $user->id,
            "name"            => $user->name,  // github 可能會取不到 `name`
            "email"           => $user->email,
            "avatar"          => $user->avatar,
        ]);
    }

}

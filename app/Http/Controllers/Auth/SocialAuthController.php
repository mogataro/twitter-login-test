<?php
namespace App\Http\Controllers\Auth;
use App\User;
use Auth;
use Socialite;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class SocialAuthController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/';

    /**
     * ユーザーをTwitterの認証ページにリダイレクトする
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('twitter')->redirect();
    }

    /**
     * Twitterからユーザー情報を取得する
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('twitter')->user();
        } catch (Exception $e) {
            return redirect('auth/twitter');
        }

        $authUser = $this->findOrCreateUser($user);

        Auth::login($authUser, true);

        return redirect()->away('http://localhost:3000');
    }
    private function findOrCreateUser($twitterUser)
    {
        $authUser = User::where('twitter_id', $twitterUser->id)->first();

        if ($authUser){
            return $authUser;
        }

        // dd($twitterUser);

        return User::create([
          'twitter_id' => $twitterUser->id,
          'name' => $twitterUser->name,
          'email'=> $twitterUser->email,
          'nickname'=> $twitterUser->nickname,
          'token'=> $twitterUser->token,
          'tokenSecret'=> $twitterUser->tokenSecret,
          'avatar'=> $twitterUser->avatar,
          'point'=> 0
        ]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
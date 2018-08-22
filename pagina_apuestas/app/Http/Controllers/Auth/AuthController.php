<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Invisnik\LaravelSteamAuth\SteamAuth;
use App\User;
use Auth;

class AuthController extends Controller
{
    /**
     * The SteamAuth instance.
     *
     * @var SteamAuth
     */
    protected $steam;

    /**
     * The redirect URL.
     *
     * @var string
     */
    protected $redirectURL = '/';

    /**
     * AuthController constructor.
     * 
     * @param SteamAuth $steam
     */
    public function __construct(SteamAuth $steam)
    {
        $this->steam = $steam;
    }

    /**
     * Redirect the user to the authentication page
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function login()
    {
        if ($this->steam->validate()) {
            $info = $this->steam->getUserInfo();

            if (!is_null($info)) {
                //dd($info);
                //$resultado = file_get_contents('http://api.steampowered.com/IPlayerService/GetOwnedGames/v0001/?key=FF40CA1F6261FFFA96D3936D0630930F&steamid=76561197960434622&format=json');
                //$player = file_get_contents('https://api.steampowered.com/IDOTA2Match_570/GetMatchHistory/V001/?start_at_match_id=76561198162934801&key=FF40CA1F6261FFFA96D3936D0630930F');
                $player  =  file_get_contents('http://api.steampowered.com/ISteamUser/GetFriendList/v0001/?key=FF40CA1F6261FFFA96D3936D0630930F&steamid=76561198162934801&relationship=friend');
                //76561198162934801
                $player=json_decode($player);
                dd($player);
                /**
                *$user = User::where('steamid', $info->steamID64)->first();

                *if (!is_null($user)) {
                *    return redirect('/');
                *}
                *else{
                *    $user = User::create([
                *    'usuario' => $info->personaname,
                *    'avatar' => $info->avatarfull,
                *    'steamid' => $info->steamID64
                *    ]);
                *    dd($user);
                *}
                */
                Auth::login($user, true);

                return redirect("datos"); // redirect to site
            }
        }
        else{
            return $this->steam->redirect();
        }
    }

    /**
     * Get user info and log in
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function handle()
    {
        if ($this->steam->validate()) {
            $info = $this->steam->getUserInfo();

            if (!is_null($info)) {
                $user = $this->findOrNewUser($info);

                Auth::login($user, true);

                return redirect($this->redirectURL); // redirect to site
            }
        }
        return $this->redirectToSteam();
    }

    /**
     * Getting user by info or created if not exists
     *
     * @param $info
     * @return User
     */
    protected function findOrNewUser($info)
    {
        $user = User::where('steamid', $info->steamID64)->first();
        dd($user);
        if (!is_null($user)) {
            return $user;
        }

        return User::create([
            'username' => $info->personaname,
            'avatar' => $info->avatarfull,
            'steamid' => $info->steamID64
        ]);
    }
}

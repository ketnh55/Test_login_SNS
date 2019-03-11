<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Service\SocialFacebookAccService;
use Twitter;
/**
 * Class LoginFacebookController
 * @package App\Http\Controllers
 */
class LoginFacebookController extends Controller
{
    /**
     * LoginFacebookController constructor.
     */
    protected $facebookAccService;

    public function __construct(SocialFacebookAccService $facebookAccService)
    {
        $this->facebookAccService = $facebookAccService;
    }

    /**
     * @return mixed
     */
    public function redirectToProvider()
    {
        return Socialite::driver('Facebook')->redirect();
    }

    public function redirectToProviderTw()
    {
        return Socialite::driver('twitter')->redirect();
    }
    /**
     *
     */
    public function callBack()
    {
        $user = Socialite::driver('Facebook')->user();

        $laravel_user = $this->facebookAccService->createOrGetFacebookUser($user , 'facebook');
        auth()->login($laravel_user);

        return redirect()->to('/home');

    }
    public function callBack_tw()
    {
        $user = Socialite::driver('twitter')->user();
        $laravel_user = $this->facebookAccService->createOrGetFacebookUser($user , 'twitter');
        auth()->login($laravel_user);
        return redirect()->to('/home');

    }

    public function getPostTw()
    {
        $json = Twitter::getFriendsIds(array('format' => 'json', 'user_id'=>'2752379652'));
        $userIds = json_decode($json);
        foreach($userIds->ids as $userid){
            $userInfoJson = Twitter::getUsers(array('format' => 'json', 'user_id' => $userid));
            //$userpost = Twitter::getHomeTimeline(array('format' => 'json', 'user_id' => $userid));
            $userInfo = json_decode($userInfoJson);
            dump($userInfo);

        }





    }

    public function getRonaldoFollow()
    {
        $json = Twitter::getUserTimeline(array('format' => 'json', 'screen_name'=>'huong_lq'));
        $posts = json_decode($json);
        dump($posts);
    }
}

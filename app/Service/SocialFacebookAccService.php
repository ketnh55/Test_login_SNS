<?php
/**
 * Created by PhpStorm.
 * User: kate
 * Date: 1/5/2019
 * Time: 4:29 PM
 */

namespace App\Service;
use App\SocialFacebookAcc;
use App\User;
use Laravel\Socialite\Contracts\User as ProviderUser;

class SocialFacebookAccService
{
    public function getFacebookUser(ProviderUser $user)
    {
        $acc = SocialFacebookAcc::whereProvider('facebook')->whereProviderUserId($user->getId())->first();
        return $acc->user;
    }

    public function getTwUser()
    {
        $acc = SocialFacebookAcc::where('provider','twitter')->get();
        return $acc;
    }

    public function createOrGetFacebookUser(ProviderUser $providerUser, string $provider)
    {
            $acc = new SocialFacebookAcc([
                'provider_user_id'=>$providerUser->getId(),
                'provider'=>$provider,
                'token'=>$providerUser->token
            ]);
            $user = User::whereEmail($providerUser->getEmail())->whereNotNull('email')->first();
            if(!$user)
            {
                $user = User::create([
                    'email'=>$providerUser->getEmail(),
                    'name'=>$providerUser->getName(),
                    'password'=>md5(rand(0,1000))
                ]);
                $acc->user()->associate($user);
                $acc->save();
            }

            return $user;
    }
    public function saveToSns($user){
        $sns = new SocialFacebookAcc([
            'name'=>$user->name,
            'provider'=>'twitter',

        ]);
    }
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialFacebookAcc extends Model
{
    //
    protected $table = 'sns_accounts';
    protected $fillable = ['user_id', 'provider_user_id', 'provider','token'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
